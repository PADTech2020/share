<?php

return [
    'menu'                => 'Contact',
    'edit'                => 'View contact',
    'tables'              => [
        'phone'     => 'هاتف',
        'email'     => 'البريد الالكتروني',
        'full_name' => 'الاسم',
        'time'      => 'Time',
        'address'   => 'العنوان',
        'subject'   => 'الموضوع',
        'content'   => 'المحتوى',
    ],
    'contact_information' => 'Contact information',
    'replies'             => 'Replies',
    'email'               => [
        'header'  => 'Email',
        'title'   => 'New contact from your site',
        'success' => 'Send message successfully!',
        'failed'  => 'Can\'t send message on this time, please try again later!',
    ],
    'form'                => [
        'name'                 => [
            'required' => 'حقل الاسم اجباري',
        ],
        'email'                => [
            'required' => 'حقل البريد الالكتروني اجباري',
            'email'    => 'البريد الالكتروني غير صحيح ',
        ],
        'content'              => [
            'required' => 'Content is required',
        ],
    ],
    'contact_sent_from'   => 'This contact information sent from',
    'sender'              => 'المرسل',
    'sender_email'        => 'البريد الالكتروني',
    'sender_address'      => 'العنوان',
    'sender_phone'        => 'الهاتف',
    'message_content'     => 'الرسالة',
    'sent_from'           => 'Email sent from',
    'form_name'           => 'الاسم',
    'form_email'          => 'البريد الالكتروني',
    'form_address'        => 'العنوان',
    'form_subject'        => 'الموضوع',
    'form_phone'          => 'الهاتف',
    'form_message'        => 'الرسالة',
    'required_field'      => 'The field with (<span style="color: red">*</span>) is required.',
    'send_btn'            => 'ارسل',
    'new_msg_notice'      => 'You have <span class="bold">:count</span> New Messages',
    'view_all'            => 'View all',
    'statuses'            => [
        'read'   => 'Read',
        'unread' => 'UnRead',
    ],
    'phone'               => 'Phone',
    'address'             => 'Address',
    'message'             => 'Message',
    'settings'            => [
        'email' => [
            'title'       => 'Contact',
            'description' => 'Contact email configuration',
            'templates'   => [
                'notice_title'       => 'Send notice to administrator',
                'notice_description' => 'Email template to send notice to administrator when system get new contact',
            ],
        ],
    ],
];
