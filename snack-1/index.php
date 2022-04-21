<?php 
    $students = [
        [
            'name' => 'Laura',
            'lastname' => 'Bianchi',
            'votes' => [9, 9, 9, 9, 10]
        ],
        [
            'name' => 'Michele',
            'lastname' => 'Papagni',
            'votes' => [8, 5, 7, 6]
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
            'votes' => [10, 2, 4]
        ],
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini',
            'votes' => [2, 8, 3, 4, 5]
        ],
        [
            'name' => 'Roberta',
            'lastname' => 'Danderini',
            'votes' => [2, 8, 9, 5, 4]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <main>
        <h1>Students:</h1>
        <div>
            <?php foreach($students as $student => $student_content) { ?>
                <p><?php echo $student_content['name'] ?></p>
                <p><?php echo $student_content['lastname'] ?></p>
                <span>Voti: </span>
                <?php foreach($student_content["votes"] as $content => $value) { ?>
                    <span><?php echo $value ?></span>
                <?php } ?> 
                <hr>    
            <?php } ?>  
        </div>
        
    </main>
</body>
</html>