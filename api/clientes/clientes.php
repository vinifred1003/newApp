<?php

if (isset($api) && $api == 'clientes') {
  if ($method == "GET") {
    if ($acao == 'lista') {
      $db = DB::connect();
      $rs = $db->prepare("SELECT * FROM clientes ORDER BY nome ;");
      $rs->execute();
      $obj = $rs->fetchAll(PDO::FETCH_ASSOC);

      if ($obj) {
        echo json_encode(["dados" => $obj]);
      } else {
        echo json_encode(["dados" => 'não existem dados para retornar']);
      }
    }
  }
}
