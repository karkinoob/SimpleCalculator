<?php 
class Calculator {
  private $num1;
  private $num2;

  public function __construct($num1,$num2) {
    $this->num1 = $num1;
    $this->num2 = $num2;
  }
  function add () {
    return $this->num1 + $this->num2;
  }
  function substract() {
    $this->num1 - $this->num2;
  }
  function multiply () {
    $this->num1 * $this->num2;
  }
  function divide () {
    if ($this->num2 == 0) {
      echo "Cannot divided by zero";
    } else {
      $this->num1 / $this->num2;
    }
  }
}
$result = "";
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"]
         }                  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
        <h2 class="mb-4 text-center">PHP OOP Calculator</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="num1" class="form-label">First Number</label>
                <input type="number" step="any" name="num1" class="form-control" required placeholder="Enter first number">
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Second Number</label>
                <input type="number" step="any" name="num2" class="form-control" required placeholder="Enter second number">
            </div>
            <div class="mb-3">
                <label for="operation" class="form-label">Select Operation</label>
                <select name="operation" class="form-select" required>
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Subtraction (-)</option>
                    <option value="multiply">Multiplication (×)</option>
                    <option value="divide">Division (÷)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Calculate</button>
        </form>

        <!-- <?php if ($result !== ""): ?>
            <div class="alert alert-info text-center mt-4">
                <strong>Result:</strong> <?= $result ?> -->
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>