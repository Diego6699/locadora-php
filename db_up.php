<?php
$bd = new SQLite3("filmes.db");

$sql = "CREATE TABLE filmes (
    id INT PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    poster varchar(200),
    sinipse TEXT,
    nota DECIMAL(2,1)
    );
";

if($bd->exec($sql)){
    echo "tabela filmes criada";
}else {
    echo "erro ao criar tabela filmes";
}

$sql = "INSERT INTO filmes (id,titulo,poster,sinipse,nota) VALUES (
    0,
    ""
)";