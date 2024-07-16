<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>your reminder app</h3>
</div>

<style>
    
    body{
        
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f7f7f7;
    margin: 0;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 400px;
    margin-top:70px;
    margin-left:400px;
    margin-right:400px;
    margin-bottom:150px;
}

h1 {
    margin: 0 0 20px 0;
    font-size: 2.5rem;
    text-transform: uppercase
}

.input-container {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

input[type="text"], input[type="date"], input[type="time"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1.8rem;
}

button {
    padding: 10px 15px;
    border: none;
    background-color: #28a745;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.8rem;
}

button:hover {
    background-color: #218838;
}

ul {
    list-style-type: none;
    padding: 0;
    margin-top: 20px;
}

li {
    background-color: #e9ecef;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

li button {
    background-color: #dc3545;
    border: none;
    padding: 5px 10px;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

li button:hover {
    background-color: #c82333;
}

</style>
    
    
    
    <div class="container">
        <h1>Reminder</h1>
        <div class="input-container">
            <input type="text" id="titleInput" placeholder="Enter title...">
            <input type="date" id="dateInput">
            <input type="time" id="timeInput">
            <button onclick="addReminder()">Add Reminder</button>
        </div>
        <ul id="reminderList"></ul>
    </div>


    
    

    <script>
        function addReminder() {
    const titleInput = document.getElementById('titleInput');
    const dateInput = document.getElementById('dateInput');
    const timeInput = document.getElementById('timeInput');

    const title = titleInput.value.trim();
    const date = dateInput.value;
    const time = timeInput.value;

    if (title !== '' && date !== '' && time !== '') {
        const reminderList = document.getElementById('reminderList');

        const listItem = document.createElement('li');
        listItem.textContent = `${title} - ${date} ${time}`;

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.onclick = function() {
            reminderList.removeChild(listItem);
        };

        listItem.appendChild(deleteButton);
        reminderList.appendChild(listItem);

        setReminderNotification(title, date, time);

        titleInput.value = '';
        dateInput.value = '';
        timeInput.value = '';
    }
}

function setReminderNotification(title, date, time) {
    const reminderTime = new Date(`${date}T${time}`).getTime();
    const now = new Date().getTime();
    const timeout = reminderTime - now;

    if (timeout > 0) {
        setTimeout(() => {
            alert(`Reminder: ${title}`);
        }, timeout);
    }
}

// Request notification permission on page load
if (Notification.permission !== 'granted') {
    Notification.requestPermission();
}
    </script>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>