<?php

$db = new SQLite3('./database/filmes.db');

$sql = "ALTER TABLE filmes ADD COLUMN favorito INT DEFAULT 0";

if($db->exec($sql)) 
  echo "tabela filmes alterada com sucesso";
else
  echo "Erro ao alterar a tabela filmes";