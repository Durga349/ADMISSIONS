<!DOCTYPE html>
<html>
<head>
  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include jQuery Validate plugin -->
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
<body>
  <form id="addform">
    <input type="text" name="ssc_exam_name" placeholder="SSC Exam Name">
    <input type="text" name="intd_exam_name" placeholder="Intermediate Exam Name">
    <input type="submit" value="Submit">
  </form>

  <script>
    $(document).ready(function() {
      $("#addform").validate({
        rules: {  
          ssc_exam_name: "required",     
          intd_exam_name: "required",
        },
        messages: {
          ssc_exam_name: "Please enter the name of the SSC examination",
          intd_exam_name: "Please enter the name of the intermediate examination",
        },
        submitHandler: function(form) {
          alert("Validation successful. Submitting form...");
          form.submit();
        }
      });
    });
  </script>
</body>
</html>
