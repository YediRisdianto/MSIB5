<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodataku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-card {
            background-color: #f8f9fa;
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }

        .profile-picture {
            object-fit: cover;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <?php
        $profiles = [
            [
                "name" => "Yedi Risdianto",
                "description" => "Mahasiswa",
                "image" => "./img/Untitled-1.png",
                "birthdate" => "5 April 2001",
                "university" => "Universitas Muhammadiyah Cirebon",
                "study" => "Teknik Informatika",
                "city" => "Kuningan, Jawa Barat",
                "activity" => "Saat ini saya sedang mengikuti program studi independen MSIB 5 di gits.id",
                "social_media" => [
                    "Instagram" => "https://instagram.com/ydrsdnt"
                ]
            ],
            // Tambahkan data profile lainnya di sini
        ];

        foreach ($profiles as $profile) {
        ?>
            <div class="card profile-card mb-4">
                <img src="<?php echo $profile['image']; ?>" class="card-img-top profile-picture" alt="Profile Picture">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $profile['name']; ?></h5>
                    <p class="card-text"><?php echo $profile['description']; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tanggal Lahir : <?php echo $profile['birthdate']; ?></li>
                    <li class="list-group-item">Universitas : <?php echo $profile['university']; ?></li>
                    <li class="list-group-item">Jurusan : <?php echo $profile['study']; ?></li>
                    <li class="list-group-item">Alamat : <?php echo $profile['city']; ?></li>
                    <li class="list-group-item">Aktivitas : <?php echo $profile['activity']; ?></li>
                </ul>
                <div class="card-body">
                    <?php
                    foreach ($profile['social_media'] as $platform => $link) {
                        echo '<a href="' . $link . '" class="card-link">' . $platform . '</a>';
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>