 <?php

return [
    'global' => [
        'save'   => 'حفظ',
        'close'  => 'إغلاق',
        'action' => 'الإجراء',
        'logout' => 'خروج',
        'sweet'  => [
            'title'          => 'هل انت متأكد?',
            'text'           => "لن تكون قادرًا على إعادة ذلك!",
            'confirm_delete' => 'نعم، احذفها!',
        ],
    ],

    /**
     * Permission.
     */
    'permission' => [
        'add'      => 'إضافة الصلاحية',
        'edit'     => 'تحرير الصلاحية',
        'title'    => 'إدارة الصلاحيات',
        'subtitle' => 'قائمة الصلاحيات',
        'fields'   => [
            'name'            => 'الصلاحية',
            'description'     => 'الوصف',
            'plc_name'        => 'اسم الصلاحية',
            'plc_description' => 'وصف الصلاحية',
        ],
        'msg' => [
            'msg_insert'   => 'The permission has been correctly added.',
            'msg_update'   => 'The permission id {0} has been correctly modified.',
            'msg_delete'   => 'The permission id {0} has been correctly deleted.',
            'msg_get'      => 'The permission id {0} has been successfully get.',
            'msg_get_fail' => 'The permission id {0} not found or already deleted.',
        ],
    ],

    /**
     * Role.
     */
    'role' => [
        'add'      => 'أضف الدور',
        'edit'     => 'تحرير الدور',
        'title'    => 'إدارة الأدوار',
        'subtitle' => 'قائمة الادوار',
        'fields'   => [
            'name'            => 'الدور',
            'description'     => 'الوصف',
            'plc_name'        => 'اسم الدور',
            'plc_description' => 'وصف الدور',
        ],
        'msg' => [
            'msg_insert'   => 'The role has been correctly added.',
            'msg_update'   => 'The role id {0} has been correctly modified.',
            'msg_delete'   => 'The role id {0} has been correctly deleted.',
            'msg_get'      => 'The role id {0} has been successfully get.',
            'msg_get_fail' => 'The role id {0} not found or already deleted.',
        ],
    ],

    /**
     * Menu.
     */
    'menu' => [
        'expand'   => 'توسيع',
        'collapse' => 'طي',
        'refresh'  => 'تحديث',
        'add'      => 'إضافة قائمة',
        'edit'     => 'قائمة تحرير',
        'title'    => 'إدارة القائمة',
        'subtitle' => 'لائحة القائمة',
        'fields'   => [
            'parent'         => 'الرئيسي',
            'warning_parent' => 'يُرجى ملاحظة أن القائمة تدعم فقط العمق الأقصى 2.',
            'active'         => 'نشط',
            'non_active'     => 'غير نشط',
            'icon'           => 'الرمز',
            'info_icon'      => 'For more icons, please see',
            'place_icon'     => 'Icon from fontawesome.',
            'name'           => 'العنوان',
            'place_title'    => 'اسم القائمة.',
            'route'          => 'المسار',
            'place_route'    => 'مسار قائمة الارتباط.',
        ],
        'msg' => [
            'msg_insert'     => 'The menu has been correctly added.',
            'msg_update'     => 'The menu has been correctly modified.',
            'msg_delete'     => 'The menu has been correctly deleted.',
            'msg_get'        => 'The menu has been successfully get.',
            'msg_get_fail'   => 'The menu not found or already deleted.',
            'msg_fail_order' => 'The menu failed the reorder.',
        ],
    ],

    /**
     * user.
     */
    'user' => [
        'add'      => 'اضف مستخدم',
        'edit'     => 'تحرير المستخدم',
        'title'    => 'إدارة المستخدمين',
        'subtitle' => 'قائمة المستخدمين',
        'fields'   => [
            'active'          => 'نشط',
            'profile'         => 'ملف التعريف',
            'join'            => 'عضو منذ',
            'setting'         => 'الإعداد',
            'non_active'      => 'غير نشط',
        ],
        'msg' => [
            'msg_insert'   => 'The user has been correctly added.',
            'msg_update'   => 'The user has been correctly modified.',
            'msg_delete'   => 'The user has been correctly deleted.',
            'msg_get'      => 'The user has been successfully get.',
            'msg_get_fail' => 'The user not found or already deleted.',
        ],
    ],
];
