<?php
 
return [
    'input' => 'Input',
    'result' => 'Result',
    'key' => 'Key',
    'Hmac-hash' => 'Hmac-hash',
    'description' => 'Hash is an one way, irreversible, function.It is often used to protect the password stored in the database. The password is changed into another string of related strings by hashing, which is stored in the database. Because the function is irreversible, it is okay for someone to see the hashed password of the database. There are different options depending on the hash method and the length of the hash value. Hmac uses the same algorithm to obtain the same result that only the two parties can calculate by sharing the key between themself. It is often used for authentication, signature (ex. AWS signature), etc.',
];