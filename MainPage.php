<!DOCTYPE html>

<html>
<head>
<style>

	p {
		text-align: center;
		font-size: 20px;
		padding-top: 1vh;
	}
	
	button {
		padding: 5%;
		font-size: 90%;
		text-align: center;
		cursor: pointer;
		outline: none;
		color: black;
		background-color: #d1b863;
		border: none;
		border-radius: 10px;
		box-shadow: 0 1px lightgrey;
	}
	
	button:hover {
		color: white;
		background-color: #998749;
		border: none;
		border-radius: 10px;
		box-shadow: 0 1px lightgrey;
	} 
	
	button:active {
		color: white;
		background-color: #998749;
		border: none;
		border-radius: 10px;
		box-shadow: 0 0;
	}
	
	input {
		font-size: 15px;
		height: 2vh;
	}
	
	table, th, td {
		border: 2px solid white;
		border-collapse: collapse;
		text-align: center;
		padding: .5vh .5vh .5vh .5vh;
	}
	
	.Header {
		background-color: #4e6993;
		padding: 3vh;
		width: 100vw;
		display: table;
		table-layout: fixed;
	}
	
		.HeaderSide {
			text-align: right;
			width: 30vw;
			display: table-cell;
		}
		
		.Title {
			color: white; 
			font-size: 5vh;
			text-align: center;
			width: 40vw;
			display: table-cell;
		}
		
		.SearchButton {
			padding: 1% 8%;
			margin-right: 3%;
		}
		
		.SearchTextBox {
			text-align: center;
			width: 9vw;
			margin-right: 15%;
		}
		
	.Body {
		width: 100vw;
		height: 100vh;
		text-align: center;
		display: table;
		table-layout: fixed;
		position: absolute;
	}
	
		.Menu {
			background-color: #808080;
			width: 15vw;
			height: 100vh;
			float: left;
		}
		
			.MenuButtons {
				margin: 5%;
				width: 75%;
			}
			
		.Students {
			background-color: #c3d7c6;
			width: 83vw;
			height: 100vh;
			float: left;
			padding-left: 2vw;
		}
		
			.StudentSide {
				text-align: right;
				width: 30vw;
				display:table-cell;
			}
			
			.StudentTitle {
				text-align: center;
				width: 20vw;
				height: 10vh;
				display:table-cell;
			}
			
			thead {
				background-color: white;
				color: #808080;
				display: block;
			}
			
			tbody {
				display: block;
				color: #808080;
				overflow-y: scroll;
				height: 64vh;
				width: 100%;
			}
		
</style>
</head>

<body style="font-family: verdana;margin: 0;padding: 0;width: 100vh;height: 100vh;overflow: hidden">

<!-- Header -->
<div class="Header">
	<div class="HeaderSide"></div>
	<div class="Title">Barangka National High School</div>
	<div class="HeaderSide">
		<button class="SearchButton">Search</button>
		<input class="SearchTextBox" placeholder="Input Name or LRN"></input>
	</div>
</div>

<div class="Body">
	<!-- Menu -->
	<div class="Menu">
		<p>Sort By</p>
		<button class="MenuButtons" id="1">LRN Ascending</button>
		<button class="MenuButtons" id="2">LRN Descending</button>
		<button class="MenuButtons" id="3">Last Name Ascending</button>
		<button class="MenuButtons" id="4">Last Name Descending</button>
		<button class="MenuButtons" id="5">First Name Ascending</button>
		<button class="MenuButtons" id="6">First Name Descending</button>
		<button class="MenuButtons" id="7">Middle Initial Ascending</button>
		<button class="MenuButtons" id="8">Middle Initial Descending</button>
	</div>

	<!-- Students -->
	<div class="Students">
		<div class="StudentSide"></div>
		<div class="StudentTitle"><p>Students</p></div>
		<div class="StudentSide"><button id="add" style="padding: 2% 8%;margin-right: 5%">Add Student</button><button style="padding: 2% 8%;margin-right: 5%">Show Archives</button></div>
		<table id="Tab">
			<thead>
			<tr>
				<th style="width: 8vw;">LRN</th>
				<th style="width: 13vw;">Last Name</th> 
				<th style="width: 26vw;">First Name</th>
				<th style="width: 13vw;">Middle Name</th>
				<th style="width: 8vw;">Student Information</th>
				<th style="width: 8vw;">Archive</th>
			</tr>
			</thead>
			<tbody>
			<?php
				include "NewTable.php";
				include "UpdateTable.php";
			?> 
			</tbody>
		</table>
	</div>
</div>

</body>
</html> 
