<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'ต้องยอมรับ :attribute',
    'accepted_if' => 'ต้องยอมรับ :attribute เมื่อ :other เป็น :value',
    'active_url' => ':attribute ต้องเป็น URL ที่ถูกต้อง',
    'after' => ':attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal' => ':attribute ต้องเป็นวันที่ตั้งแต่ :date เป็นต้นไป',
    'alpha' => ':attribute ต้องเป็นตัวอักษรเท่านั้น',
    'alpha_dash' => ':attribute ต้องเป็นตัวอักษร ตัวเลข และเครื่องหมาย dash, underscore เท่านั้น',
    'alpha_num' => ':attribute ต้องเป็นตัวอักษรและตัวเลขเท่านั้น',
    'array' => ':attribute ต้องเป็น array',
    'ascii' => ':attribute ต้องเป็นอักขระ ASCII เท่านั้น',
    'before' => ':attribute ต้องเป็นวันที่ก่อนหน้า :date',
    'before_or_equal' => ':attribute ต้องเป็นวันที่ไม่เกิน :date',
    'between' => [
        'array' => ':attribute ต้องมีระหว่าง :min ถึง :max รายการ',
        'file' => ':attribute ต้องมีขนาดระหว่าง :min ถึง :max kilobytes',
        'numeric' => ':attribute ต้องมีค่าระหว่าง :min ถึง :max',
        'string' => ':attribute ต้องมีความยาวระหว่าง :min ถึง :max อักขระ',
    ],
    'boolean' => ':attribute ต้องเป็น true หรือ false',
    'can' => ':attribute มีค่าที่ไม่ได้รับอนุญาต',
    'confirmed' => 'การยืนยัน :attribute ไม่ตรงกัน',
    'current_password' => 'รหัสผ่านไม่ถูกต้อง',
    'date' => ':attribute ต้องเป็นวันที่ที่ถูกต้อง',
    'date_equals' => ':attribute ต้องเป็นวันที่เท่ากับ :date',
    'date_format' => ':attribute ต้องอยู่ในรูปแบบ :format',
    'decimal' => ':attribute ต้องมีทศนิยม :decimal ตำแหน่ง',
    'declined' => 'ต้องปฏิเสธ :attribute',
    'declined_if' => 'ต้องปฏิเสธ :attribute เมื่อ :other เป็น :value',
    'different' => ':attribute และ :other ต้องไม่เหมือนกัน',
    'digits' => ':attribute ต้องเป็น :digits หลัก',
    'digits_between' => ':attribute ต้องมีระหว่าง :min ถึง :max หลัก',
    'dimensions' => ':attribute มีขนาดภาพไม่ถูกต้อง',
    'distinct' => ':attribute มีค่าซ้ำกัน',
    'doesnt_end_with' => ':attribute ต้องไม่ลงท้ายด้วย :values',
    'doesnt_start_with' => ':attribute ต้องไม่ขึ้นต้นด้วย :values',
    'email' => ':attribute ต้องเป็น email ที่ถูกต้อง',
    'ends_with' => ':attribute ต้องลงท้ายด้วย :values',
    'enum' => ':attribute ที่เลือกไม่ถูกต้อง',
    'exists' => ':attribute ที่เลือกไม่ถูกต้อง',
    'extensions' => ':attribute ต้องมีนามสกุลไฟล์ :values',
    'file' => ':attribute ต้องเป็นไฟล์',
    'filled' => ':attribute ต้องมีค่า',
    'gt' => [
        'array' => ':attribute ต้องมีมากกว่า :value รายการ',
        'file' => ':attribute ต้องมีขนาดมากกว่า :value kilobytes',
        'numeric' => ':attribute ต้องมากกว่า :value',
        'string' => ':attribute ต้องยาวกว่า :value อักขระ',
    ],
    'gte' => [
        'array' => ':attribute ต้องมีอย่างน้อย :value รายการ',
        'file' => ':attribute ต้องมีขนาดอย่างน้อย :value kilobytes',
        'numeric' => ':attribute ต้องมีค่าอย่างน้อย :value',
        'string' => ':attribute ต้องมีความยาวอย่างน้อย :value อักขระ',
    ],
    'hex_color' => ':attribute ต้องเป็นรหัสสี hexadecimal ที่ถูกต้อง',
    'image' => ':attribute ต้องเป็นรูปภาพ',
    'in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'in_array' => ':attribute ต้องมีอยู่ใน :other',
    'integer' => ':attribute ต้องเป็นจำนวนเต็ม',
    'ip' => ':attribute ต้องเป็น IP address ที่ถูกต้อง',
    'ipv4' => ':attribute ต้องเป็น IPv4 address ที่ถูกต้อง',
    'ipv6' => ':attribute ต้องเป็น IPv6 address ที่ถูกต้อง',
    'json' => ':attribute ต้องเป็น JSON ที่ถูกต้อง',
    'list' => ':attribute ต้องเป็น list',
    'lowercase' => ':attribute ต้องเป็นตัวพิมพ์เล็ก',
    'lt' => [
        'array' => ':attribute ต้องมีน้อยกว่า :value รายการ',
        'file' => ':attribute ต้องมีขนาดน้อยกว่า :value kilobytes',
        'numeric' => ':attribute ต้องน้อยกว่า :value',
        'string' => ':attribute ต้องสั้นกว่า :value อักขระ',
    ],
    'lte' => [
        'array' => ':attribute ต้องมีไม่เกิน :value รายการ',
        'file' => ':attribute ต้องมีขนาดไม่เกิน :value kilobytes',
        'numeric' => ':attribute ต้องไม่เกิน :value',
        'string' => ':attribute ต้องมีความยาวไม่เกิน :value อักขระ',
    ],
    'mac_address' => ':attribute ต้องเป็น MAC address ที่ถูกต้อง',
    'max' => [
        'array' => ':attribute ต้องมีไม่เกิน :max รายการ',
        'file' => ':attribute ต้องมีขนาดไม่เกิน :max kilobytes',
        'numeric' => ':attribute ต้องไม่เกิน :max',
        'string' => ':attribute ต้องไม่เกิน :max อักขระ',
    ],
    'max_digits' => ':attribute ต้องมีไม่เกิน :max หลัก',
    'mimes' => ':attribute ต้องเป็นไฟล์ประเภท :values',
    'mimetypes' => ':attribute ต้องเป็นไฟล์ประเภท :values',
    'min' => [
        'array' => ':attribute ต้องมีอย่างน้อย :min รายการ',
        'file' => ':attribute ต้องมีขนาดอย่างน้อย :min kilobytes',
        'numeric' => ':attribute ต้องมีค่าอย่างน้อย :min',
        'string' => ':attribute ต้องมีอย่างน้อย :min อักขระ',
    ],
    'min_digits' => ':attribute ต้องมีอย่างน้อย :min หลัก',
    'missing' => ':attribute ต้องไม่มี',
    'missing_if' => ':attribute ต้องไม่มีเมื่อ :other เป็น :value',
    'missing_unless' => ':attribute ต้องไม่มีเว้นแต่ :other เป็น :value',
    'missing_with' => ':attribute ต้องไม่มีเมื่อมี :values',
    'missing_with_all' => ':attribute ต้องไม่มีเมื่อมี :values ทั้งหมด',
    'multiple_of' => ':attribute ต้องเป็นผลคูณของ :value',
    'not_in' => ':attribute ที่เลือกไม่ถูกต้อง',
    'not_regex' => 'รูปแบบ :attribute ไม่ถูกต้อง',
    'numeric' => ':attribute ต้องเป็นตัวเลข',
    'password' => [
        'letters' => ':attribute ต้องมีตัวอักษรอย่างน้อย 1 ตัว',
        'mixed' => ':attribute ต้องมีตัวพิมพ์ใหญ่และตัวพิมพ์เล็กอย่างน้อยอย่างละ 1 ตัว',
        'numbers' => ':attribute ต้องมีตัวเลขอย่างน้อย 1 ตัว',
        'symbols' => ':attribute ต้องมี symbol อย่างน้อย 1 ตัว',
        'uncompromised' => ':attribute นี้ปรากฏใน data leak กรุณาเลือก :attribute อื่น',
    ],
    'present' => ':attribute ต้องมี',
    'present_if' => ':attribute ต้องมีเมื่อ :other เป็น :value',
    'present_unless' => ':attribute ต้องมีเว้นแต่ :other เป็น :value',
    'present_with' => ':attribute ต้องมีเมื่อมี :values',
    'present_with_all' => ':attribute ต้องมีเมื่อมี :values ทั้งหมด',
    'prohibited' => ':attribute ไม่อนุญาต',
    'prohibited_if' => ':attribute ไม่อนุญาตเมื่อ :other เป็น :value',
    'prohibited_unless' => ':attribute ไม่อนุญาตเว้นแต่ :other อยู่ใน :values',
    'prohibits' => ':attribute ไม่อนุญาตให้มี :other',
    'regex' => 'รูปแบบ :attribute ไม่ถูกต้อง',
    'required' => 'ต้องระบุ :attribute',
    'required_array_keys' => ':attribute ต้องมีรายการ :values',
    'required_if' => 'ต้องระบุ :attribute เมื่อ :other เป็น :value',
    'required_if_accepted' => 'ต้องระบุ :attribute เมื่อยอมรับ :other',
    'required_unless' => 'ต้องระบุ :attribute เว้นแต่ :other อยู่ใน :values',
    'required_with' => 'ต้องระบุ :attribute เมื่อมี :values',
    'required_with_all' => 'ต้องระบุ :attribute เมื่อมี :values ทั้งหมด',
    'required_without' => 'ต้องระบุ :attribute เมื่อไม่มี :values',
    'required_without_all' => 'ต้องระบุ :attribute เมื่อไม่มี :values ทั้งหมด',
    'same' => ':attribute ต้องตรงกับ :other',
    'size' => [
        'array' => ':attribute ต้องมี :size รายการ',
        'file' => ':attribute ต้องมีขนาด :size kilobytes',
        'numeric' => ':attribute ต้องเป็น :size',
        'string' => ':attribute ต้องมี :size อักขระ',
    ],
    'starts_with' => ':attribute ต้องขึ้นต้นด้วย :values',
    'string' => ':attribute ต้องเป็น string',
    'timezone' => ':attribute ต้องเป็น timezone ที่ถูกต้อง',
    'unique' => ':attribute นี้ถูกใช้ไปแล้ว',
    'uploaded' => 'อัปโหลด :attribute ไม่สำเร็จ',
    'uppercase' => ':attribute ต้องเป็นตัวพิมพ์ใหญ่',
    'url' => ':attribute ต้องเป็น URL ที่ถูกต้อง',
    'ulid' => ':attribute ต้องเป็น ULID ที่ถูกต้อง',
    'uuid' => ':attribute ต้องเป็น UUID ที่ถูกต้อง',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

