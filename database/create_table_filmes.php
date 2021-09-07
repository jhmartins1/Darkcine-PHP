<?php

$db = new SQLite3('filmes.db');

$sql = "DROP TABLE IF EXISTS filmes";

if($db->exec($sql)) echo "tabela filmes apagada";

$sql = "CREATE TABLE filmes (
          id INTEGER PRIMARY KEY AUTOINCREMENT,
          titulo VARCHAR(200) NOT NULL,
          poster VARCHAR(200),
          sinopse TEXT,
          nota DECIMAL(2,1)
          )
        ";

if($db->exec($sql)) echo "tabela filmes criada com sucesso"; else "erro ao criar";

$sql = "INSERT INTO filmes(id, titulo, poster, sinopse, nota) VALUES (
  0,
  'Vingadores',
  'https://www.themoviedb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
  'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.',
  8.6
  )";

if($db->exec($sql)) echo "filmes inseridos com sucesso"; else "erro ao inserir filmes";

$sql = "INSERT INTO filmes(id, titulo, poster, sinopse, nota) VALUES (
  1,
  'Esquadrão Suicida',
  'https://www.themoviedb.org/t/p/original/wTS3dS2DJiMFFgqKDz5fxMTri.jpg',
  'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.',
  7.2
  )";

if($db->exec($sql)) echo "filmes inseridos com sucesso"; else "erro ao inserir filmes";


