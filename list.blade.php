<h2> Doctors List</h2>
<table border="4">
	<tr>
    <td>ID</td>
	<td>Name</td>
	<td>Department</td>
	<td>Contact</td>
	</tr>
    @foreach($doctors as $doctor)
    <tr>
    <td>{{$doctor['ID']}}</td>
	<td>{{$doctor['Name']}}</td>
    <td>{{$doctor['Department']}}</td>
    <td>{{$doctor['Contact']}}</td>
	</tr>
    @endforeach
</table>
<style media ="screen">
        body{
            background:linear-gradient(to right,#134E5E,#71B280); 
        }
	table{
		border:2px solid black;
		border-collapse: collapse;
		margin-left:170px;
		width:1100px;
		margin-top:35px;
		
	}
	th{
		border:2px solid black;
		font-size:25px;
		padding:5px;
		background-color:#d8f8b7;
        color: #4A0606;
	}
	td{
		border:2px solid black;
		font-size:20px;
		padding:5px;
		text-align:center;
		background:#334d50;
        color:beige;
	}
        h2{
        text-align: center;
        font-family: sans-serif;
            color: azure;
        }
        p{
            text-align: center;
            color:blanchedalmond;
        }
		
	</style>