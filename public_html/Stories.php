<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interactive Novel Editor</title>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>StoryDo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
body {
font-family: Arial, sans-serif;
}

h1 {
text-align: center;
}

#story-container {
margin: 20px auto;
padding: 20px;
border: 1px solid #ccc;
max-width: 600px;
}

button {
margin: 10px;
padding: 5px 10px;
font-size: 16px;
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>StoryDo</h1>
  <p>Make your stories real</p> 
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">StoryDo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Stories.php">Stories</a></li>
        <li><a href="indexred.php">Editor</a></li>
        <li> 
        <?php   
     if($_COOKIE ['user'] == ''):
        ?>
  
  
  <a onclick="document.getElementById('id01').style.display='block'">Регистрация/Вход</a>
  <?php else: ?>
  <a href="cab.php">Profile</a>
  <?php endif; ?>
 
</div></li>
      </ul>
    </div>
  </div>
</nav>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="validation-form/check.php" method="post">
    <div class="container">
      <h1>Регистрация</h1>
      <p>Заполните все поля чтобы создать аккаунт</p>
      <hr>
      <label for="email"><b>Логин</b></label>
      <input type="text" placeholder="Enter Login" name="login" required>
      
      <label for="name"><b>Имя</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label for="pass"><b>Пароль</b></label>
      <input type="text" placeholder="Enter Password" name="pass" required>

      
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>Если у вас уже есть аккаунт <a onclick="document.getElementById('id02').style.display='block'">Вход</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>




<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="validation-form/auth.php" method="post">
    <div class="container">
      <h1>Вход</h1>
      <p>Чтобы войти заполните все поля</p>
      <hr>
      <label for="login"><b>Логин</b></label>
      <input type="text" placeholder="Enter Login" name="login" required>
      
     

      <label for="pass"><b>Пароль</b></label>
      <input type="text" placeholder="Enter Password" name="pass" required>

      
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

     

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>




<?php   
     if($_COOKIE ['user'] == ''):
  ?>
  
  <h1> Необъходимо авторизоваться чтобы видеть истории</h1>
  <?php else: ?>

<div id="story-container" class="modal-content">
  <span onclick="document.getElementById('story-container').style.display='none'" class="close" title="Close Modal">×</span>
  
</div>


<script>
function appendText(text) {
const storyContainer = document.getElementById('story-container');
const paragraph = document.createElement('p');
paragraph.textContent = text;
storyContainer.appendChild(paragraph);
}

function clearStory() {
const storyContainer = document.getElementById('story-container');
storyContainer.innerHTML = '';
}

function createChoiceButton(choiceText, choiceFunction) {
const storyContainer = document.getElementById('story-container');
const button = document.createElement('button');
button.textContent = choiceText;
button.addEventListener('click', choiceFunction);
storyContainer.appendChild(button);
}

function startStory() {
clearStory();
appendText('Часть 1: Предисловие');
appendText('Вы - отважный искатель приключений, всегда готовый к новым открытиям и неизведанным мирам. Однажды вам поступило загадочное письмо от дальнего родственника, известного археолога, который нашел необычный артефакт. Он просит вас приехать к нему и помочь разгадать его тайны. Вы отправляетесь в экспедицию на отдаленный остров, полный загадок и опасностей');
appendText('Часть 2: Перед выбором');
appendText('По прибытии на остров, вы обнаруживаете, что дом родственника пуст. Все выглядит заброшенным, но вы замечаете следы, указывающие на то, что кто-то был здесь недавно. Вы входите в дом и видите на столе два предмета: дневник и старинную карту');
createChoiceButton('Прочитать дневник', readDiary);
createChoiceButton('Изучить карту', studyMap);
}

function readDiary() {
clearStory();
appendText('Часть 3: Раскрытие тайн');
appendText('Вы начинаете читать дневник, где ваш родственник описывает свои приключения и находку артефакта. Он предупреждает вас о опасностях на острове и дает инструкции, как найти храм, где находится артефакт.');

createChoiceButton('Следовать пещере', exploreCave);
createChoiceButton('Оставить дневник и исследовать остров по карте', exploreIsland);
}

function studyMap() {
clearStory();
appendText('Часть 3: Раскрытие секретов');
appendText('Вы изучаете карту, которая указывает на несколько интересных мест на острове, включая старый храм. Вы решаете отправиться исследовать холм, отмеченный на карте.');

createChoiceButton('Попытаться унести артефакт и выбраться из храма', escapeTemple);
createChoiceButton('Попытаться найти другой путь к выходу в храме', findAlternateExit);
}

function exploreCave() {
clearStory();
appendText('Часть 4: Решение и последствия');
appendText('Вы следуете указаниям в дневнике и находите пещеру, где, по предположению родственника, находится артефакт. Однако, вас подстерегает ловушка. Вам необходимо принять решение:');

createChoiceButton('Попытаться разорвать ловушку и спасти артефакт', saveArtifact);
createChoiceButton('Побежать, чтобы спастись от ловушки, но рискнуть потерять артефакт', leaveArtifact);
}

function exploreIsland() {
clearStory();
appendText('Часть 4: Решение и последствия');
appendText('Вы оставляете дневник и решаете исследовать остров, руководствуясь картой. Вы обнаруживаете холм, отмеченный на карте, и исследуете его. Но ваше путешествие заканчивается без артефакта. Вы возвращаетесь домой смущенным и расстроенным, не найдя то, что искали.');
}

function escapeTemple() {
clearStory();
appendText('Часть 4: Решение и последствия');
appendText('Вы решаете попытаться унести артефакт и выбраться из храма. Однако, когда вы берете артефакт, активируется механизм ловушки. Большой камень падает, блокируя выход. Вы оказываетесь запертым в храме навсегда вместе с артефактом.');
}

function findAlternateExit() {
clearStory();
appendText('Часть 4: Решение и последствия');
appendText('Вы решаете найти другой путь к выходу в храме. Несмотря на тщательные поиски, вы встречаете множество ловушек и запутанной системы проходов. Вы блуждаете в темноте и никогда не находите выход. Остров становится вашим вечным приютом.');
}

function saveArtifact() {
clearStory();
appendText('Часть 5: Великие открытия');
appendText('Вам удается разорвать ловушку и спасти артефакт. Вы возвращаетесь с ним домой и становитесь героем научного мира. Артефакт оказывается ключом к разгадке древних тайн и приводит к великим открытиям.');
}

function leaveArtifact() {
clearStory();
appendText('Часть 5: Потеря и разочарование');
appendText('Вы побежали, чтобы спастись от ловушки, но в процессе уронили артефакт. Вы потеряли его навсегда. Возвращаясь домой с пустыми руками, вы ощущаете глубокое разочарование и потерю. Ваше приключение закончилось неудачей.');
}

// Запуск функции для начала истории при загрузке страницы
window.onload = startStory;
</script>
<?php endif; ?>

</div>
</div>
</body>
</html>



