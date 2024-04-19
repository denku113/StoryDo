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




    <h1>Interactive Novel Editor</h1>
    
    <div class="container">
    
    <div id="editor">
    <h2 for="story-title">Story Title:</h2>
    <input type="text" id="story-title" name="Name" placeholder="Название">

    <button class="btn" id="add-fragment-btn">Add Fragment</button>
    <button class="btn" id="save-story-btn">Save Story</button>

   
    <div id="fragments-container">
    <!— fragments will be added here —>
    </div>
    </div>
    <script src="script.js"></script>
  
</div>
    


<script>

const storyTitleInput = document.getElementById("story-title");
const addFragmentBtn = document.getElementById("add-fragment-btn");
const saveStoryBtn = document.getElementById("save-story-btn");
const fragmentsContainer = document.getElementById("fragments-container");

let fragments = [];

addFragmentBtn.addEventListener("click", () => {
const fragment = createFragment();
fragments.push(fragment);
fragmentsContainer.appendChild(fragment.element);
});

saveStoryBtn.addEventListener("click", () => {
const story = createStory();
saveStory(story);
});

function createFragment() {
const fragment = {
text: "",
choices: [],
element: document.createElement("div")
};

const textArea = document.createElement("textarea");
textArea.placeholder = "Enter fragment text";
textArea.addEventListener("input", (event) => {
fragment.text = event.target.value;
});
fragment.element.appendChild(textArea);

const addChoiceBtn = document.createElement("button");
addChoiceBtn.textContent = "Add Choice";
addChoiceBtn.addEventListener("click", () => {
const choice = createChoice();
fragment.choices.push(choice);
choicesContainer.appendChild(choice.element);
});
fragment.element.appendChild(addChoiceBtn);

const choicesContainer = document.createElement("div");
fragment.element.appendChild(choicesContainer);

function createChoice() {
const choice = {
text: "",
nextFragmentIndex: null,
element: document.createElement("div")
};

const textInput = document.createElement("input");
textInput.placeholder = "Enter choice text";
textInput.addEventListener("input", (event) => {
choice.text = event.target.value;
});
choice.element.appendChild(textInput);

const nextFragmentSelect = document.createElement("select");
nextFragmentSelect.addEventListener("change", (event) => {
const selectedOption = event.target.selectedOptions[0];
choice.nextFragmentIndex = parseInt(selectedOption.value);
});

const defaultOption = document.createElement("option");
defaultOption.disabled = true;
defaultOption.selected = true;
defaultOption.textContent = "Select next fragment";

nextFragmentSelect.appendChild(defaultOption);

fragments.forEach((fragment, index) => {
const option = document.createElement("option");
option.value = index;
option.textContent = `Fragment ${index + 1}`;
nextFragmentSelect.appendChild(option);
});

choice.element.appendChild(nextFragmentSelect);

return choice;
}

return fragment;
}

function createStory() {
const story = {
title: storyTitleInput.value,
fragments: fragments.map((fragment) => {
const choices = fragment.choices.map((choice) => {
return {
text: choice.text,
nextFragmentIndex: choice.nextFragmentIndex
};
});

return {
text: fragment.text,
choices
};
})
};

return story;
}

</script>

</body>
</html>