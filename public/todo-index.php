<?php
include '../src/bootstrap.php';
#var_dump($cms);
#var_dump($username);
#$project = $cms->getProject()->getOne($_POST['id']);
$tester = $cms->todos()->getAll();
#var_dump($tester);
foreach($tester[0] as $key=>$val){
	echo 'key: ' . $key . ' value: '. $val . '<br>';
}
?>

<html>
<head>
    <title>Todo List</title>

    <!-- Minimal clean style from pico css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">

    <style>
      /* Pico css keeps bullets in lists, we hide them */
      li {
        list-style-type: none !important;
      }

      /* If a task is done, we display strike it */
      input:checked + label {
        text-decoration: line-through;
      }
    </style>
</head>
<body>
    <!-- pico css needs this class for centering  -->
    <div class="container">

      <br> <!-- Lazy spacing from top of the screen  -->

        <!-- The title. We hardcode the number of tasks and the tasks themselves here,
        but we will change that will templating later -->

        <h1>Todo <span>(3/4)</span></h1>


        <!-- The form to add a new task. button-primary is pico css styling -->
        <form method="post"  >
          <input type="text" name="title" placeholder="New task" value="" autocomplete="off">
          <button type="submit" value="Add" class="button-primary" role="button">Add</button>
        </form>


        <!-- The list of tasks, again hardcoded for the moment. It's in a form
        with a button to update the status (done/not done) manually, like grandma
        used to do. -->
        <form method="post">
            <ul>

                <li>
                    <input type="checkbox" id="task432432"
                           name="task"
                           value="432432"
                    >
                    <label for="task432432">Call the secret services</label>
                    <a>X</a>
                </li>

                <li>
                    <input type="checkbox" id="task1"
                          name="task"
                          value="1"
                          checked
                    >
                    <label for="task1">Save orphans</label>
                    <a>X</a>
                </li>

              <li>
                  <input type="checkbox" id="task43"
                        name="task"
                        value="43"
                  >
                  <label for="task43">Leg day</label>
                  <a>X</a>
              </li>

            </ul>

            <button type="submit" class="button-primary">Update</button>

        </form>
    </div>
</body>
</html>
