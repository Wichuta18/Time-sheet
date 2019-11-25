<?php
//insert_project
$connect = mysqli_connect("localhost", "root", "", "timesheet");
if(!empty($_POST))
{
    $output = '';
    $projectCode = mysqli_escape_string($connect, $_POST["projectCode"]);
    $projectName = mysqli_escape_string($connect, $_POST["projectName"]);
    $budget = mysqli_escape_string($connect, $_POST["budget"]);
    $total = mysqli_escape_string($connect, $_POST["total"]); 

    $query = "INSERT INTO projects(ProjectName, ProjectCode, Budget, Total_dar)
    VALUES('$projectName', '$projectCode', '$budget', '$total')";

    if(mysqli_query($connect, $query))
    {
        $output .= '<label class="text-success">Data Insert</lable>';
        $select_query = "SELECT * FROM projects ORDER BY idProject DESC";
        $result = mysqli_query($connect, $select_query);
        $output .= '
                <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Project Code#</th>
                    <th scope="col">Project name</th>
                    <th scope="col">Client</th>
                    <th scope="col">Budget</th>
                    <th scope="col">Total duration</th>
                    <th scope="col">Team</th>
                </tr>
        ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
                    ';
        }
        $output .= '<table>';
    }
    echo $output;
}
?>

