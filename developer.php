<?php
// 1. Define your personal information and links
$name = "Your Name";
$bio = "Full Stack Developer | UI/UX Enthusiast";
$profile_pic = "src=assets/img/developerprofilephoto.png"; // Replace with your image URL

$social_links = [
    "GitHub"   => "https://github.com/Ricccc2023",
    "Facebook"=> "https://www.facebook.com/ricilagann",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> | Developer Profile</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f9; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); text-align: center; width: 350px; }
        .profile-img { width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 4px solid #007bff; margin-bottom: 1rem; }
        h1 { margin: 10px 0; color: #333; }
        p { color: #666; font-size: 0.9rem; margin-bottom: 1.5rem; }
        .links-container { display: flex; flex-direction: column; gap: 10px; }
        .link-btn { background: #007bff; color: white; text-decoration: none; padding: 12px; border-radius: 8px; font-weight: bold; transition: background 0.3s; }
        .link-btn:hover { background: #0056b3; }
    </style>
</head>
<body>

    <div class="card">
        <img src="<?php echo $profile_pic; ?>" alt="Profile Picture" class="profile-img">
        <h1><?php echo $name; ?></h1>
        <p><?php echo $bio; ?></p>

        <div class="links-container">
            <?php foreach ($social_links as $platform => $url): ?>
                <a href="<?php echo $url; ?>" class="link-btn" target="_blank">
                    <?php echo $platform; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>