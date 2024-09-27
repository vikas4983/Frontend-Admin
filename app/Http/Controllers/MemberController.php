<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\MemberCreateRequest;
use App\Jobs\SendEmailJob;
use App\Jobs\UserEmailJob;
use App\Jobs\UserSendEmailJob;
use App\Models\EmailTemplate;
use App\Models\Member;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Traits\UserEmailTemplateTrait;
use App\Traits\MemberOtpTrait;
use Session;



class MemberController extends Controller
{
    //protected $UserEmailJob;
    /**
     * Display a listing of the resource.
     */
    use UserEmailTemplateTrait;
    use MemberOtpTrait;


    public function changePassword(ChangePasswordRequest $request)
    {

        $user = auth()->user();
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully!');
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = config('formFields.register');
        $validationRules = [];
        foreach ($fields as $key => $field) {
            $validationRules[$field['name']] = $field['rules'];
        }
        $validateData = $request->validate($validationRules);
        $validateData['password'] = Hash::make($validateData['password']);
        if ($validateData) {
            $user = User::create($validateData);
            $name = 'AccountVerification';
            $accountInfo = [
                'name' => $validateData['name'],
                'mobile' => $validateData['mobile'],
                'email' => $validateData['email']
            ];
            session(['accountInfo' => $accountInfo]);
            
            $emailTemplate = $this->userEmailTemplate($name);
            UserSendEmailJob::dispatch($user, $emailTemplate);
            return redirect('verification');

        } else {
            return redirect()->back()->withErrors(['error' => 'Fill the all fields correctly']);
        }

    }

    public function verification()
    {
        // $accountInfo = session('accountInfo');
        return view('frontend.users.verification')->with('success', 'Otp has been sent to your email & mobile number!');

    }



    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
    }
}
