<?php

// return [
//     'register' => [

//         ['type' => 'text', 'name' => 'name', 'label' => 'Name', 'placeholder' => 'Enter Name', 'rules' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255'],
//         ['type' => 'email', 'name' => 'email', 'label' => 'Email', 'placeholder' => 'Enter Email', 'rules' => 'required|email|unique:users,email|max:255'],
//         [
//             'type' => 'password',
//             'name' => 'password',
//             'label' => 'Password',
//             'placeholder' => 'Enter Password',
//             'rules' => 'required|min:8|regex:/^[a-zA-Z0-9\s\-\_\@\.\,\!\#\$\%\^\&\*\(\)\_\+\=]*$/'
//         ],

//         ['type' => 'select', 'name' => 'gender', 'label' => 'Gender', 'options' => ['male' => 'Male', 'female' => 'Female']],
//         ['type' => 'text', 'name' => 'mobile', 'label' => 'Mobile', 'placeholder' => 'Enter Mobile Number', 'rules' => 'required|numeric|digits:10'],
//         ['type' => 'file', 'name' => 'profile_image', 'label' => 'Profile Image', 'rules' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'],
//     ],
//     'login' => [
//         ['type' => 'email', 'name' => 'email', 'label' => 'Email', 'placeholder' => 'Enter Email', 'rules' => 'required|email'],
//         [
//             'type' => 'password',
//             'name' => 'password',
//             'label' => 'Password',
//             'placeholder' => 'Enter Password',
//             'rules' => 'required|min:8|regex:/^[a-zA-Z0-9\s\-\_\@\.\,\!\#\$\%\^\&\*\(\)\_\+\=]*$/'
//         ],
//     ],
//     'profile_update' => [
//         ['type' => 'text', 'name' => 'name', 'label' => 'Full Name', 'placeholder' => 'Enter Full Name', 'rules' => 'required|string|max:255'],
//         ['type' => 'email', 'name' => 'email', 'label' => 'Email', 'placeholder' => 'Enter Email', 'rules' => 'required|email|unique:users,email,'],
//         ['type' => 'file', 'name' => 'profile_image', 'label' => 'Profile Image', 'rules' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'],
//     ],
// ];




































return [

    'register' => [

        'image' => [
            'type' => 'file',
            'name' => 'image',
            'label' => 'Profile Image',
            'rules' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        'name' => [
            'type' => 'text',
            'name' => 'name',
            'label' => 'Full Name',
            'placeholder' => 'Enter Full Name',
            'rules' => 'required|string|regex:/^[\pL\s]+$/u|max:255',
        ],
        'email' => [
            'type' => 'email',
            'name' => 'email',
            'label' => 'Email',
            'placeholder' => 'Enter Email',
            'rules' => 'required|email|unique:users,email|max:255',
        ],
        'password' => [
            'type' => 'password',
            'name' => 'password',
            'label' => 'Password',
            'placeholder' => 'Enter Password',
            'rules' => 'required|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&]/',
        ],
        'password_confirmation' => [
            'type' => 'password',
            'name' => 'password_confirmation',
            'label' => 'Confirm Password',
            'placeholder' => 'Enter confirm password',
            'rules' => 'required|same:password',
        ],


        'gender' => [
            'type' => 'select',
            'label' => 'Gender',
            'name' => 'gender',
            'options' => ['male' => 'Male', 'female' => 'Female'],
            'rules' => 'required',
        ],
        'mobile' => [
            'type' => 'mobile',
            'name' => 'mobile',
            'label' => 'Mobile',
            'placeholder' => 'Enter Mobile Number',
            'rules' => 'required|numeric|digits:10',
        ],

    ],
    'login' => [
        'email' => [
            'name' => 'email',
            'type' => 'email',
            'label' => 'Email',
            'placeholder' => 'Enter Email',
            'rules' => 'required|email|unique:users,email|max:255',
        ],
        'password' => [
            'name' => 'password',
            'type' => 'password',
            'label' => 'Password',
            'placeholder' => 'Enter Password',
            'rules' => 'required|min:8|regex:/^[a-zA-Z0-9\s\-\_\@\.\,\!\#\$\%\^\&\*\(\)\_\+\=]*$/',
        ]
    ],


];



























