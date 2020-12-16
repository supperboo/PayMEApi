 <?php
  echo '<pre>';
  include 'ApiService.php';
  $privateKey = '-----BEGIN RSA PRIVATE KEY-----'
    . 'MIIBPAIBAAJBAKWcehEELB4GdQ4cTLLQroLqnD3AhdKiwIhTJpAi1XnbfOSrW/Eb'
    . 'w6h1485GOAvuG/OwB+ScsfPJBoNJeNFU6J0CAwEAAQJBAJSfTrSCqAzyAo59Ox+m'
    . 'Q1ZdsYWBhxc2084DwTHM8QN/TZiyF4fbVYtjvyhG8ydJ37CiG7d9FY1smvNG3iDC'
    . 'dwECIQDygv2UOuR1ifLTDo4YxOs2cK3+dAUy6s54mSuGwUeo4QIhAK7SiYDyGwGo'
    . 'CwqjOdgOsQkJTGoUkDs8MST0MtmPAAs9AiEAjLT1/nBhJ9V/X3f9eF+g/bhJK+8T'
    . 'KSTV4WE1wP0Z3+ECIA9E3DWi77DpWG2JbBfu0I+VfFMXkLFbxH8RxQ8zajGRAiEA'
    . '8Ly1xJ7UW3up25h9aa9SILBpGqWtJlNQgfVKBoabzsU='
    . '-----END RSA PRIVATE KEY-----';

  $publicKey  = '-----BEGIN PUBLIC KEY-----' .
    'MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAKWcehEELB4GdQ4cTLLQroLqnD3AhdKi' .
    'wIhTJpAi1XnbfOSrW/Ebw6h1485GOAvuG/OwB+ScsfPJBoNJeNFU6J0CAwEAAQ==' .
    '-----END PUBLIC KEY-----';
  $accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHBJZCI6MX0.wNtHVZ-olKe7OAkgLigkTSsLVQKv_YL9fHKzX9mn9II';
  $connectToken = 'O4zJDqjakRR9AC1UEX4stf1O1GYjibDxOf84UlwzuRsvycbWuc/tbRal8SVKhY/mEMim7TsXLobNqINvob61Zjm/0aphDzcjIw6eALfM90E=';
  $payload =  [
    'connectToken' => $connectToken,
    'paging' => ['start' => 0, 'limit' => 100],
    'sort' => []
  ];
  $domain = 'https://sbx-wam.payme.vn';
  $apiService = new ApiService(true,  $domain, $privateKey, $publicKey, $accessToken);
  $result = $apiService->PayMEApi('/v1/History/Search', 'POST', $payload);

  print_r($result);
  ?>
  