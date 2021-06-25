<?= view("backend.layout.header", [
    "title" => $title,
    "data" => [
        "nama" => "nita",
    ]
]); ?>

<h1><?= $title ?></h1>

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, voluptatum magni repellat nulla error, rem culpa fugit laboriosam cum ratione voluptate. Voluptatem sequi mollitia reiciendis, recusandae in illo cumque officiis.</p>

<?= view("backend.layout.footer") ?>