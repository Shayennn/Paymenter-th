<?php

return [
    'account' => 'บัญชี',
    'personal_details' => 'ข้อมูลส่วนตัว',
    'security' => 'ความปลอดภัย',
    'credits' => 'เครดิต',

    'change_password' => 'เปลี่ยนรหัสผ่าน',

    'two_factor_authentication' => 'การตรวจสอบสองขั้นตอน',
    'two_factor_authentication_description' => 'เพิ่มความปลอดภัยให้กับบัญชีของคุณด้วยการเปิดใช้งานการยืนยันตัวตนแบบสองขั้นตอน',
    'two_factor_authentication_enabled' => 'บัญชีของคุณเปิดใช้งานการยืนยันตัวตนแบบสองขั้นตอนแล้ว',
    'two_factor_authentication_enable' => 'เปิดใช้งานการยืนยันตัวตนแบบสองขั้นตอน',
    'two_factor_authentication_disable' => 'ปิดการยืนยันตัวตนแบบสองขั้นตอน',
    'two_factor_authentication_disable_description' => 'คุณแน่ใจหรือไม่ว่าต้องการปิดการยืนยันตัวตนแบบสองขั้นตอน การดำเนินการนี้จะลดระดับความปลอดภัยของบัญชีของคุณ',
    'two_factor_authentication_enable_description' => 'เพื่อเปิดใช้งานการยืนยันตัวตนแบบสองขั้นตอน กรุณาสแกน QR Code ด้านล่างด้วยแอปยืนยันตัวตน เช่น Google Authenticator หรือ Authy',
    'two_factor_authentication_qr_code' => 'สแกน QR Code ด้านล่างด้วยแอปยืนยันตัวตนของคุณ:',
    'two_factor_authentication_secret' => 'หรือป้อนรหัสต่อไปนี้ด้วยตนเอง:',

    'sessions' => 'เซสชัน',
    'sessions_description' => 'จัดการและออกจากเซสชันที่ใช้งานอยู่บนเบราว์เซอร์และอุปกรณ์อื่น',
    'logout_sessions' => 'ออกจากเซสชันนี้',
    'current_device' => 'อุปกรณ์ปัจจุบัน',

    'input' => [
        'current_password' => 'รหัสผ่านปัจจุบัน',
        'current_password_placeholder' => 'รหัสผ่านปัจจุบันของคุณ',
        'new_password' => 'รหัสผ่านใหม่',
        'new_password_placeholder' => 'รหัสผ่านใหม่ของคุณ',
        'confirm_password' => 'ยืนยันรหัสผ่าน',
        'confirm_password_placeholder' => 'ยืนยันรหัสผ่านใหม่ของคุณ',

        'two_factor_code' => 'ป้อนรหัสจากแอปยืนยันตัวตนของคุณ',
        'two_factor_code_placeholder' => 'รหัสยืนยันตัวตนแบบสองขั้นตอนของคุณ',

        'currency' => 'สกุลเงิน',
        'amount' => 'จำนวนเงิน',
        'payment_gateway' => 'ช่องทางชำระเงิน',
    ],

    'notifications' => [
        'password_changed' => 'เปลี่ยนรหัสผ่านเรียบร้อยแล้ว',
        'password_incorrect' => 'รหัสผ่านปัจจุบันไม่ถูกต้อง',
        'two_factor_enabled' => 'เปิดใช้งานการยืนยันตัวตนแบบสองขั้นตอนเรียบร้อยแล้ว',
        'two_factor_disabled' => 'ปิดการยืนยันตัวตนแบบสองขั้นตอนเรียบร้อยแล้ว',
        'two_factor_code_incorrect' => 'รหัสไม่ถูกต้อง',
        'session_logged_out' => 'ออกจากเซสชันเรียบร้อยแล้ว',
    ],

    'no_credit' => 'คุณไม่มีเครดิต',
    'add_credit' => 'เพิ่มเครดิต',
    'credit_deposit' => 'เติมเครดิต (:currency)',

    'payment_methods' => 'วิธีการชำระเงิน',
    'recent_transactions' => 'รายการธุรกรรมล่าสุด',
    'saved_payment_methods' => 'วิธีการชำระเงินที่บันทึกไว้',
    'setup_payment_method' => 'ตั้งค่าวิธีการชำระเงินใหม่',
    'no_saved_payment_methods' => 'คุณไม่มีวิธีการชำระเงินที่บันทึกไว้',
    'saved_payment_methods_description' => 'จัดการวิธีการชำระเงินที่บันทึกไว้เพื่อชำระเงินที่รวดเร็วและชำระเงินอัตโนมัติ',
    'no_saved_payment_methods_description' => 'คุณสามารถเพิ่มวิธีการชำระเงินเพื่อให้การชำระเงินในอนาคตรวดเร็วและสะดวกยิ่งขึ้น พร้อมทั้งเปิดใช้งานการชำระเงินอัตโนมัติสำหรับบริการของคุณ',
    'add_payment_method' => 'เพิ่มวิธีการชำระเงิน',
    'payment_method_statuses' => [
        'active' => 'ใช้งานอยู่',
        'inactive' => 'ไม่ได้ใช้งาน',
        'expired' => 'หมดอายุ',
        'pending' => 'รอดำเนินการ',
    ],
    'payment_method_added' => 'เพิ่มวิธีการชำระเงินเรียบร้อยแล้ว',
    'payment_method_add_failed' => 'ไม่สามารถเพิ่มวิธีการชำระเงินได้ กรุณาลองใหม่อีกครั้ง',
    'services_linked' => 'เชื่อมโยงกับ :count บริการ',
    'remove' => 'ลบ',
    'remove_payment_method' => 'ลบวิธีการชำระเงิน',
    'remove_payment_method_confirm' => 'คุณแน่ใจหรือไม่ว่าต้องการลบ :name การดำเนินการนี้ไม่สามารถยกเลิกได้',
    'expires' => 'หมดอายุ :date',
    'cancel' => 'ยกเลิก',
    'confirm' => 'ยืนยันการลบ',
    'email_notifications' => 'การแจ้งเตือนทางอีเมล',
    'in_app_notifications' => 'การแจ้งเตือนในแอป',
    'notifications_description' => 'จัดการการตั้งค่าการแจ้งเตือนของคุณ คุณสามารถเลือกรับการแจ้งเตือนทางอีเมล แอป (push) หรือทั้งสองช่องทาง',
    'notification' => 'การแจ้งเตือน',

    'push_notifications' => 'การแจ้งเตือนแบบพุช',
    'push_notifications_description' => 'เปิดใช้งานการแจ้งเตือนแบบพุชเพื่อรับข้อมูลอัปเดตแบบเรียลไทม์ในเบราว์เซอร์ของคุณ แม้ว่าคุณจะไม่ได้เปิดเว็บไซต์อยู่',
    'enable_push_notifications' => 'เปิดใช้งานการแจ้งเตือนแบบพุช',
    'push_status' => [
        'not_supported' => 'เบราว์เซอร์ของคุณไม่รองรับการแจ้งเตือนแบบพุช',
        'denied' => 'การแจ้งเตือนแบบพุชถูกบล็อก กรุณาเปิดใช้งานในการตั้งค่าเบราว์เซอร์ของคุณ',
        'subscribed' => 'เปิดใช้งานการแจ้งเตือนแบบพุชเรียบร้อยแล้ว',
    ],
];

