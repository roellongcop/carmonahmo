<?php



return [
    'adminEmail' => 'admin@example.com',
    'source_of_patient' => [
        'walk-in',
        'Online Application'
    ],

    'actions' => [
    	'index' => ['index'],
    	'default' => ['index', 'create', 'view', 'update', 'delete'],
    	'withReport' => ['index', 'create', 'view', 'update', 'delete', 'report'],
    ],

    'imagePath' => 'resources/backend/img/',

    'frontendPath' => 'resources/frontend/img/',
    
    'user_type' => [
    	'Patient',
    	'Staff',
    	'Doctor'
    ],

    'appointment_status' => [
        'Pending',
        'Approved',
        'Reject',
        'Finished'
    ],

    'status' => [
        'Active',
        'Not-Active',
    ],

    'label_class' => [
        'warning',
        'primary',
        'danger',
        'success'
    ],

    'icons' => [
        'fa fa-envelope',
        'fa fa-anchor',
        'fa fa-area-chart',
        'fa fa-bell-o',
        'fa fa-bolt',
        'fa fa-book',
        'fa fa-bookmark-o',
        'fa fa-briefcase'
    ],

    'gender' => [
        1 => 'Male',
        2 => 'Female'
    ],
    'user_status' => [
        'Active',
        'Not-Active'
    ],

    'educational_attainment' => [
        1 => 'N/A', 
        2 => 'Elementary', 
        3 => 'High School',
        // 4 => 'High School Undergrad',
        4 => 'College',
        // 6 => 'College Graduate',
        // 7 => 'Masteral Undergrad',
        // 8 => 'Masteral Graduate',
        // 9 => 'Doctorate Undergrad',
        // 10 => 'Doctorate Graduate',
    ],

    'employment_status' => [
        1 => 'Employed', 
        // 2 => 'Self-Employed', 
        2 => 'Un-Employed',
    ],

    'civil_status' => [
        1 => 'Single', 
        2 => 'Married', 
        3 => 'Widowed'
    ],

    'relationship' => [
        1 => 'Father',
        2 => 'Mother',
        3 => 'Cousin',
        4 => 'Wife',
        5 => 'Husband',
    ],

    'delivery_type' => [
        1 => 'Normal', 
        2 => 'Cesarian'
    ],
    'diagnosis' => [
        1 => 'TB DISEASES',
        2 =>  'TB INFECTION, FOR IPT(FOR CHILDREN BELOW 5YO)',
        3 =>  'TB EXPOSURE, FOR IPT(FOR CHILDREN BELOW 5YO)'
    ],

    'history_of_anti_tb_drug_intake' =>[
        1 => 'Yes',
        2 => 'No'
    ],

    'bacteriological_status' => [
        1 => 'bacteriology Confirmed',
        2 => 'Clinically Diagnosed'
    ],

    'classification_of_tb_disease' => [
       1 => 'Pulmonary',
        2 => 'Extra-pulmonary'
    ],

    'registeration_group' => [
          1 => 'New',
           2 => 'Relapse',
          3=>  'TALF',
          4 =>  'Treatment After Failure',
          5 =>   'PTOU',
           6 => 'other',
          7 =>   'Transfer-in'
    ],

    'treatment_outcome' => [
        1 =>  'CURED',
         2 =>  'TREATMENT COMPLETED',
         3 =>   'TREATMENT FAILED',
         4 =>    'LOST TO FOLLOW-UP',
         5 =>   'NOT EVALUATED',
         6 =>   'DIED'
    ],

    'bcg_scar' => [
        1 => 'Yes',
        2 => 'No',
        3 => 'Doubtful'
    ],
    
    
    'times' => [
        '8:00 AM' =>  '8:00 AM',
        '9:00 AM' => '9:00 AM',
        '10:00 AM' => '10:00 AM',
        '11:00 AM' => '11:00 AM',
        '12:00 NN' => '12:00 NN',
        '1:00 PM' => '1:00 PM',
        '2:00 PM' => '2:00 PM',
        '3:00 PM' => '3:00 PM',
        '4:00 PM' => '4:00 PM',
        '5:00 PM' => '5:00 PM',
    ],
    
    'result' => [0 => 'PASSED',1=>'FAILED'],

    'access' => [
        0 => 'Birthing',
        1 => 'Dental',
        2 => 'Medical',
        3 => 'DOTS',
        4 => 'Water Laboratory',
    ],


    'menu' => [
        [
            'label' => 'Dashboard',
            'url' => ['dashboard/index'],
            'icon' => 'fa fa-dashboard'
        ],
        [
            'label' => 'Records',
            'url' => ['records/index'],
            'icon' => 'fa fa-book'
        ],
        [
            'label' => 'Appointments',
            'url' => ['appointment/index'],
            'icon' => 'fa fa-pencil'
        ],
        [
            'label' => 'Users',
            'url' => ['user/index'],
            'icon' => 'fa fa-group'
        ],
        [
            'label' => 'Birthing Program',
            'url' => ['birthing/index'],
            'icon' => 'fa fa-female'
        ],
        [
            'label' => 'Laboratory',
            'url' => ['fecalysis/index'],
            'icon' => 'fa fa-group'
        ],
        [
            'label' => 'TB Program (DOTS)',
            'url' => ['dots/index'],
            'icon' => 'fa fa-female'
        ],
        [
            'label' => 'Water Laboratory',
            'url' => ['water-lab/index'],
            'icon' => 'fa fa-crosshairs'
        ],
        [
            'label' => 'Physical',
            'url' => ['physical/index'],
            'icon' => 'fa fa-male'
        ],

        [
            'label' => 'Dental',
            'url' => ['dental/index'],
            'icon' => 'fa fa-medkit'
        ],
        
        [
            'label' => 'Checkups',
            'url' => ['medical/index'],
            'icon' => 'fa fa-user-md'
        ],

        [
            'label' => 'Activities',
            'url' => ['activity/index'],
            'icon' => 'fa fa-cubes'
        ],
        
        [
            'label' => 'Complaints',
            'url' => ['complaint/index'],
            'icon' => 'fa fa-warning'
        ],
        [
            'label' => 'About Us',
            'url' => ['about/index'],
            'icon' => 'fa fa-info'
        ],

        [
            'label' => 'Profile',
            'url' => ['profile/index'],
            'icon' => 'fa fa-user-secret'
        ],
        
        [
            'label' => 'Archive',
            'url' => ['archive/index'],
            'icon' => 'fa fa-user-secret'
        ],
        
        
        
        
    ]
 
];
