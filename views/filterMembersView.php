<!DOCTYPE html>
<html>
     <body>

        <style type="text/css">
         .center-div
         {
             position: absolute;
             margin: auto;
             left: 150px;
         }
        </style>

        <div class="center-div">
         <form action="../index.php?ctrl=filteringController&action=filter" method="post">
             Field:<br>
             <select name="studentsInfoField">
                 <option value="ID">ID</option>
                 <option value="Name">Name</option>
                 <option value="Level">Level</option>
                 <option value="Degree">Degree</option>
             </select>
             <br><br>
             Search Key:<br>
             <input type="text" name="searchKey" value="searchKey">
             <br><br>
             <input type="submit" value="Submit">
         </form>
        </div>

     </body>
</html>
