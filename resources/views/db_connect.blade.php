<html>
 <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap-sty.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="css/sty.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="css/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="css/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="css/ekko-lightbox.css" rel="stylesheet">
    <head>
        <link rel="stylesheet" href="css/sty.css">
        <title>users</title>
		<style>
			body{
				background-image: url(images/A3.jpg);
				background-size: cover;
				height: 80vh;
				background-position: center;
			}
			th, td, tr {
				border: black 1px solid;
				padding: 5px 5px 5px 5px;
				text-align: center;
				color: black;
			}
			.edit-package-table {
				margin: 60px 0 60px 100px;
            margin-left:310px;
				background-color: rgba(255, 255, 255, 0.9);;
				color: black;
				width: 700px;
				padding: 30px;
				border-radius: 15px;
				box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			}
         .main_menu {
            background-color: #ffffff90;
         }
		</style>
    </head>
	<body>
    <div class="main_menu">
                        <nav class="navbar navbar-inverse navbar-toggleable-md">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="float-left">Menu</span>
                           <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                           </button>
                           <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                              <ul class="navbar-nav">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="admin">Home</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>  
                     </div>
        <div class="edit-package-table">
		<table>
			<tr>
				<th>name</th>
				<th>number</th>
				<th>eqa</th>
				<th>e NO.</th>
				<th>p</th>
                <th>no</th>
                <th>date</th>
            <th>Delete</th>
			</tr>
					@foreach($info as $in)	<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$in['name']}}</td>
							<td>{{$in['number']}}</td>
							<td>{{$in['eqa']}}</td>
							<td>{{$in['p']}}</td>
                            <td>{{$in['np']}}</td>
                            <td>{{$in['date']}}</td>
                     <td><a href="deletecontact/{{$in['id']}}">Delete</a></td>
                     

						</tr>
                        @endforeach
		</table>
        </div>
	</body>
</html>