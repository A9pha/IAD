<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Lab_IAD_1</title>
		<style type="text/css">
			table {
				margin: auto;
				border: 1px solid lime; 
			}
			td {
				border: 1px solid lime;
    			text-align: center;
   			}
   			tbody {
   				border: 1px solid lime;
   			}
   			thead{
   				border: 1px solid lime;
  			}
		</style>
	</head>

	<body>

		<?php

			$startTime = microtime(true);

			class Point {
				public $x;
				public $y;
				public $r;

				function __construct($x_val, $y_val, $r_val) {
					$this->x = $x_val;
					$this->y = $y_val;
					$this->r = $r_val;
				}

				function IsInArea() {
					if ($this->x < 0 && $this->y < 0) {
						return false;
					}
					elseif (($this->x) >= 0 && ($this->y) >= 0 && ($this->x) * ($this->x) + ($this->y) * ($this->y) <= ($this->r/2) * ($this->r/2)) {
						return true;
					}
					elseif ($this->x >= 0 && $this->x <= $this->r/2 && $this->y <= 0 && $this->y >= -$this->r) {
						return true;
					}
					elseif ($this->x <= 0 && $this->x >= -$this->r && $this->y <=r/2 && $this->y <= $this->x/2 + $this->r/2) {
						return true;
					}
					else return false;
				}
			}

			$x = $_POST['X'];
			$y = $_POST['Y'];
			$r = $_POST['hidden_field'];
			$now = new DateTime();
			$point = new Point($x, $y, $r);

		?>

		<table>
			<thead>
				<td>X</td>
				<td>Y</td>
				<td>R</td>
				<td>Is in area</td>
				<td>Now</td>
				<td>Working time</td>
			</thead>
			<tbody>
				<td><?php echo $point->x ?></td>
				<td><?php echo $point->y ?></td>
				<td><?php echo $point->r ?></td>
				<td><?php
						if ($point->IsInArea() == true) {
							echo "Yes";
						}
						else echo "No";
					?>
				</td>
				<td> <?php echo $now->format('Y-m-d H:i:s'); ?> </td>
				<td><?php					
						$finishTime = microtime(true);
						$ExecitionTime = $finishTime - $startTime;
						echo $ExecitionTime . "sec.";
					 ?>					 
				</td>
			</tbody>
		</table>

	</body>

</html>