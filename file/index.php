<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css" >
</head>
<body>
    <div class="container">
        <div class="todo-app">
        <h1>Todo List</h1>
            <div class="row">
            <form class="form-inline">
                <select class="form-control form-control-short" id="dropdown" name="options">
                    <option value="option1" class="important">สำคัญมาก</option>
                    <option value="option2" class="normal">ปกติ</option>
                    <option value="option3" class="less-important">ไม่สำคัญ</option>
                </select>
                <input id="i-box" class="form-control" type="text" placeholder="เพิ่มรายการที่นี่" aria-label="default input example" name="todo" required>
                <button class="btn btn-light" onclick="addTask()">Add</button>
            </form>
            </div>
            <ul id="list-container">
                <!-- <li class="checked">task 1</li>
                <li>task 1</li>
                <li>task 1</li> -->
            </ul>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>
