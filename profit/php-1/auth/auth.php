<?php

function getUserList() {
  $users = file_get_contents('users.json');
  return json_decode($users);
}

function createUser(array $data) {
  $users = json_decode(file_get_contents('users.json'));
  if(isset($data['name']) && isset($data['password'])) {
    $data['password'] = password_hash($data['password'] . 'JWT_SECRET', PASSWORD_DEFAULT);
    array_push($users, $data);
    file_put_contents('users.json', json_encode($users));
  }
}

function findUser($name) {
  $users = getUserList();
  foreach($users as $user) {
    if($user->name === $name) {
      return $user;
    }
  }
  return false;
}

function generateToken($data) {
  $key = 'JWT_SECRET';
  $dataEncoded = base64_encode(json_encode($data));
  $signatureEncode = base64_encode(hash_hmac('sha256', $dataEncoded, $key, true));
  $jwt = $dataEncoded . '.' . $signatureEncode;
  return $jwt;
}

function verifyToken($token) {
  $key = 'JWT_SECRET';
  $dataEncoded = explode('.', $token)[0];
  $signature = hash_hmac('sha256', $dataEncoded, $key, true);
  $signatureDecode = base64_decode(explode('.', $token)[1]);
  if(hash_equals($signature, $signatureDecode)) {
    $dataDecode = json_decode(base64_decode($dataEncoded));
    return ['payload'=> ['name' => $dataDecode->name]];
  }
  return [];
}

function login($name, $password) {
  $user = findUser($name);
  if($user) {
    $passwordVerify = password_verify($password . 'JWT_SECRET', $user->password);
    if($passwordVerify) {
      $token = generateToken($user);
      return ['token' => $token];
    } else {
      return ['message'=>'Неверный пароль'];
    }
  } else {
    return ['message'=>'Пользователь не зарегистрирован'];
  }
}