<?php
// data pribadi
$nama = "Husna Maulidah";
$alamat = "Jl.Angkasa Raya GG.Cendrawasih 5";
$email = "husnamaulidah18@gmail.com";
$telepon = "089662450271";
$deskripsi_diri = "Saya adalah individu yang disiplin, bertanggung jawab, dan mampu bekerja secara mandiri maupun dalam tim. 
Kreatif, detail-oriented, dan memiliki passion dalam bidang desain grafis dan multimedia. Mampu mengoperasikan berbagai 
tools desain seperti Adobe Photoshop, Illustrator, dan Figma. Terbiasa mengerjakan proyek dengan deadline ketat dan berkolaborasi dengan berbagai tim.";
$foto_profil = "foto1.jpg"; // Path ke foto profil Anda

// data pendidikan
$pendidikan = [
    [
        "tingkat" => "S1 Sistem Informasi",
        "institusi" => "STMIK IKMI CIREBON",
        "tahun" => "2024 - 2028"
    ],
    [
        "tingkat" => "SMK FASHION",
        "institusi" => "SMK NEGERI 2 CIREBON",
        "tahun" => "2021 - 2024"
    ]
];

// data pengalaman kerja
$pengalaman_kerja = [
    [
        "posisi" => "Praktik Kerja Lapangan (PKL)",
        "perusahaan" => " BT Batik Trusmi",
        "tahun" => "2022 - 2023",
        "deskripsi" => "Membantu tim dalam membuat pola pakaian, menjahit pakaian, dan mendesain"
    ],
    [
        "posisi" => "Tim wadrobe",
        "perusahaan" => "ChintyaDew_MakeUp",
        "tahun" => "2024 - 2025",
        "deskripsi" => "Bertanggung jawab dalam pekerjaan fitting baju pengantin, packing, dan menerima client."
    ]
];

// data keahlian
$keahlian = [
    "bahasa" => "html, css, javascript, php",
    "framework" => "laravel, codeigniter",
    "database" => "mysql, postgresql",
    "alat" => "git, vs code, docker"
];

// data hobi
$hobi = [
    "Komunitas coding & diskusi startup",
    "Membuat logo dan branding sederhana",
    "Menyulam",
    "Berenang"
];
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curriculum vitae - <?php echo $nama; ?></title>
    <style>
        body {
            font-family: arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            flex-wrap: wrap;
        }
        .left-column {
            flex: 1;
            padding-right: 20px;
        }
        .right-column {
            flex-basis: 200px;
            text-align: center;
        }
        h1, h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
            margin-top: 0;
        }
        .section {
            margin-bottom: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .job-title {
            font-weight: bold;
        }
        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #333;
            margin-bottom: 20px;
        }
        /* Media queries untuk responsivitas */
        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }
            .left-column, .right-column {
                flex: none;
                width: 100%;
                padding: 0;
            }
            .profile-photo {
                margin-left: auto;
                margin-right: auto;
                display: block;
            }
            .right-column {
                order: -1;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-column">
            <h1><?php echo $nama; ?></h1>
            <p><strong>alamat:</strong> <?php echo $alamat; ?></p>
            <p><strong>email:</strong> <?php echo $email; ?></p>
            <p><strong>telepon:</strong> <?php echo $telepon; ?></p>

            <div class="section">
                <h2>deskripsi diri</h2>
                <p><?php echo $deskripsi_diri; ?></p>
            </div>

            <div class="section">
                <h2>pendidikan</h2>
                <ul>
                    <?php foreach ($pendidikan as $p) { ?>
                        <li>
                            <strong><?php echo $p["tingkat"]; ?></strong><br>
                            <?php echo $p["institusi"]; ?> (<?php echo $p["tahun"]; ?>)
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="section">
                <h2>pengalaman kerja</h2>
                <ul>
                    <?php foreach ($pengalaman_kerja as $pk) { ?>
                        <li>
                            <span class="job-title"><?php echo $pk["posisi"]; ?></span> - <?php echo $pk["perusahaan"]; ?><br>
                            tahun: <?php echo $pk["tahun"]; ?><br>
                            <p><?php echo $pk["deskripsi"]; ?></p>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="section">
                <h2>keahlian</h2>
                <ul>
                    <?php foreach ($keahlian as $k => $v) { ?>
                        <li><strong><?php echo $k; ?>:</strong> <?php echo $v; ?></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="section">
                <h2>hobi</h2>
                <ul>
                    <?php foreach ($hobi as $h) { ?>
                        <li><?php echo $h; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="right-column">
            <?php if (!empty($foto_profil)) { ?>
                <img src="<?php echo $foto_profil; ?>" alt="Foto Profil <?php echo $nama; ?>" class="profile-photo">
            <?php } ?>
        </div>
    </div>
</body>
</html>
