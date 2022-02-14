<?php
 session_start();
if(!empty($_SESSION['loggedin'])) 
{
	// echo $_SESSION['loggedin'];
}
if(!empty($_GET['n'])) {
    $email = $_GET['n'];// $msg = $_POST['msg'];
    // echo 'logged in as '.$email;
     $n=$_GET['n'];

}
else
{
	  	header("Location: index.php");
  		session_destroy();   

}
if(!empty($_SESSION['logindone']))
{
	if(!empty($_SESSION['graphicdone']))
	{
		if(!empty($_SESSION['graphic2done']))
		{
			if(!empty($_SESSION['otpdone']))
			{
				if($_SESSION['logindone'] == "yes" && $_SESSION['graphicdone'] == "yes" && $_SESSION['graphic2done'] == "yes" && $_SESSION['otpdone'] == "yes")
				{
					  	header("Location: dashboard.php");
				}
				else
				{
						session_destroy();   
				}
			}
		}
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">	
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>				
	<title></title>
</head>
<style>/*
.key:nth-of-type(1) { order: 3 }
*/
</style>
<script>
	function mix()
	{
		document.getElementById('key').style.order= Math.floor((Math.random() * 100));
		document.getElementById('key2').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key3').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key4').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key5').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key6').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key7').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key8').style.order= Math.floor((Math.random() * 100) + 1);		
		document.getElementById('key9').style.order= Math.floor((Math.random() * 100) + 1);
		// document.getElementById('key10').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key11').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key12').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key13').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key14').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key15').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key16').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key17').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key18').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key19').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key20').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key21').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key22').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key23').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key24').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key25').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key26').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key27').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key28').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key29').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key30').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key31').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key32').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key33').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key34').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key35').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key36').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key37').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key38').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key39').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key40').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key41').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key42').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key43').style.order= Math.floor((Math.random() * 100) + 1);		
		document.getElementById('key44').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key45').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key46').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key47').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key48').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key49').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key50').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key51').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key52').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key53').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key54').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key55').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key56').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key57').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key58').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key59').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key60').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key61').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key62').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key63').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key64').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key65').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key66').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key67').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key68').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key69').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key70').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key71').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key72').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key73').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key74').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key75').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key76').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key77').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key78').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key79').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key80').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key81').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key82').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key83').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key84').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key85').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key86').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key87').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key88').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key89').style.order= Math.floor((Math.random() * 100) + 1);		
		document.getElementById('key90').style.order= Math.floor((Math.random() * 100) + 1);
		document.getElementById('key91').style.order= Math.floor((Math.random() * 100) + 1);	
		// console.log(  Math.floor((Math.random() * 10) + 1));

	}
</script>
<body bgcolor="#0086dd" onload="mix()">
	<?php include('header.php') ?>
	<section id="content">
			<div class="layout2"><br>
				<h1> S3PAS VALIDATION STAGE 1 </h1><br>
			<img src="./images/manlock.png" width=" 20%" height="180px"></img>
				<div class="tablebox">
					<button id="key" class="key" onclick="takealpha(this.value)" value="A"> A </button>
					<button id="key2" class="key"onclick="takealpha(this.value)" value="B"> B </button>
					<button id="key3" class="key" onclick="takealpha(this.value)" value="C"> C </button>
					<button id="key4" class="key" onclick="takealpha(this.value)" value="D"> D </button>
					<button id="key5" class="key" onclick="takealpha(this.value)" value="E"> E </button>
					<button id="key6" class="key" onclick="takealpha(this.value)" value="F"> F </button>
					<button id="key7" class="key" onclick="takealpha(this.value)" value="G"> G </button>
					<button id="key8" class="key" onclick="takealpha(this.value)" value="H"> H </button>
					<button id="key9" class="key" onclick="takealpha(this.value)" value="I"> I </button>
					<button id="key11" class="key" onclick="takealpha(this.value)" value="J"> J </button>
					<button id="key12" class="key" onclick="takealpha(this.value)" value="K"> K </button>
					<button id="key13" class="key" onclick="takealpha(this.value)" value="L"> L </button>
					<button id="key14" class="key" onclick="takealpha(this.value)" value="M"> M </button>
					<button id="key15" class="key" onclick="takealpha(this.value)" value="N"> N </button>
					<button id="key16" class="key" onclick="takealpha(this.value)" value="O"> O </button>
					<button id="key17" class="key" onclick="takealpha(this.value)" value="P"> P </button>
					<button id="key18" class="key" onclick="takealpha(this.value)" value="Q"> Q </button>
					<button id="key19" class="key" onclick="takealpha(this.value)" value="R"> R </button>
					<button id="key20" class="key" onclick="takealpha(this.value)" value="S"> S </button>
					<button id="key21" class="key" onclick="takealpha(this.value)" value="T"> T </button>
					<button id="key22" class="key" onclick="takealpha(this.value)" value="U"> U </button>
					<button id="key23" class="key" onclick="takealpha(this.value)" value="V"> V </button>
					<button id="key24" class="key" onclick="takealpha(this.value)" value="W"> W </button>
					<button id="key25" class="key" onclick="takealpha(this.value)" value="X"> X </button>
					<button id="key26" class="key" onclick="takealpha(this.value)" value="Y"> Y </button>
					<button id="key27" class="key" onclick="takealpha(this.value)" value="Z"> Z </button>
					<button id="key28" class="key" onclick="takealpha(this.value)" value="a"> a </button>
					<button id="key29" class="key" onclick="takealpha(this.value)" value="b"> b </button>
					<button id="key30" class="key" onclick="takealpha(this.value)" value="c"> c </button>
					<button id="key31" class="key" onclick="takealpha(this.value)" value="d"> d </button>
					<button id="key32" class="key" onclick="takealpha(this.value)" value="e"> e </button>
					<button id="key33" class="key" onclick="takealpha(this.value)" value="f"> f </button>
					<button id="key34" class="key" onclick="takealpha(this.value)" value="g"> g </button>
					<button id="key35" class="key" onclick="takealpha(this.value)" value="h"> h </button>
					<button id="key36" class="key" onclick="takealpha(this.value)" value="i"> i </button>
					<button id="key37" class="key" onclick="takealpha(this.value)" value="j"> j </button>
					<button id="key38" class="key" onclick="takealpha(this.value)" value="k"> k </button>
					<button id="key39" class="key" onclick="takealpha(this.value)" value="l"> l </button>
					<button id="key40" class="key" onclick="takealpha(this.value)" value="m"> m </button>
					<button id="key41" class="key" onclick="takealpha(this.value)" value="n"> n </button>
					<button id="key42" class="key" onclick="takealpha(this.value)" value="o"> o </button>
					<button id="key43" class="key" onclick="takealpha(this.value)" value="p"> p </button>
					<button id="key44" class="key" onclick="takealpha(this.value)" value="q"> q </button>
					<button id="key45" class="key" onclick="takealpha(this.value)" value="r"> r </button>
					<button id="key46" class="key" onclick="takealpha(this.value)" value="s"> s </button>
					<button id="key47" class="key" onclick="takealpha(this.value)" value="t"> t </button>
					<button id="key48" class="key" onclick="takealpha(this.value)" value="u"> u </button>
					<button id="key49" class="key" onclick="takealpha(this.value)" value="v"> v </button>
					<button id="key50" class="key" onclick="takealpha(this.value)" value="w"> w </button>
					<button id="key51" class="key" onclick="takealpha(this.value)" value="x"> x </button>
					<button id="key52" class="key" onclick="takealpha(this.value)" value="y"> y </button>
					<button id="key53" class="key" onclick="takealpha(this.value)" value="z"> z </button>
					<button id="key54" class="key" onclick="takealpha(this.value)" value="1"> 1 </button>
					<button id="key55" class="key" onclick="takealpha(this.value)" value="2"> 2 </button>
					<button id="key56" class="key" onclick="takealpha(this.value)" value="3"> 3 </button>
					<button id="key57" class="key" onclick="takealpha(this.value)" value="4"> 4 </button>
					<button id="key58" class="key" onclick="takealpha(this.value)" value="5"> 5 </button>
					<button id="key59" class="key" onclick="takealpha(this.value)" value="6"> 6 </button>
					<button id="key60" class="key" onclick="takealpha(this.value)" value="7"> 7 </button>
					<button id="key61" class="key" onclick="takealpha(this.value)" value="8"> 8 </button>
					<button id="key62" class="key" onclick="takealpha(this.value)" value="9"> 9 </button>
					<button id="key63" class="key" onclick="takealpha(this.value)" value="@"> @ </button>
					<button id="key64" class="key" onclick="takealpha(this.value)" value="!"> ! </button>
					<button id="key65" class="key" onclick="takealpha(this.value)" value="#"> # </button>
					<button id="key66" class="key" onclick="takealpha(this.value)" value="$"> $ </button>
					<button id="key67" class="key" onclick="takealpha(this.value)" value="%"> % </button>
					<button id="key68" class="key" onclick="takealpha(this.value)" value="^"> ^ </button>
					<button id="key69" class="key" onclick="takealpha(this.value)" value="&"> & </button>
					<button id="key70" class="key" onclick="takealpha(this.value)" value="*"> * </button>
					<button id="key71" class="key" onclick="takealpha(this.value)" value="("> ( </button>
					<button id="key72" class="key" onclick="takealpha(this.value)" value=")"> ) </button>
					<button id="key73" class="key" onclick="takealpha(this.value)" value="_"> _ </button>
					<button id="key74" class="key" onclick="takealpha(this.value)" value="-"> - </button>
					<button id="key75" class="key" onclick="takealpha(this.value)" value="+"> + </button>
					<button id="key76" class="key" onclick="takealpha(this.value)" value="="> = </button>
					<button id="key77" class="key" onclick="takealpha(this.value)" value="{"> { </button>
					<button id="key78" class="key" onclick="takealpha(this.value)" value="}"> } </button>
					<button id="key79" class="key" onclick="takealpha(this.value)" value="|"> | </button>
					<button id="key80" class="key" onclick="takealpha(this.value)" value=";"> ; </button>
					<button id="key81" class="key" onclick="takealpha(this.value)" value=":"> : </button>
					<button id="key82" class="key" onclick="takealpha(this.value)" value="'"> ' </button>
					<button id="key83" class="key" onclick="takealpha(this.value)" value="\"> \ </button>
					<button id="key84" class="key" onclick="takealpha(this.value)" value=","> , </button>
					<button id="key85" class="key" onclick="takealpha(this.value)" value="<"> < </button>
					<button id="key86" class="key" onclick="takealpha(this.value)" value=">"> > </button>
					<button id="key87" class="key" onclick="takealpha(this.value)" value="."> . </button>
					<button id="key88" class="key" onclick="takealpha(this.value)" value="/"> / </button>
					<button id="key89" class="key" onclick="takealpha(this.value)" value="A"?> ? </button>
					<button id="key90" class="key" onclick="takealpha(this.value)" value="`"> ` </button>
					<button id="key91" class="key" onclick="takealpha(this.value)" value="~"> ~ </button>
				</div>
				<form action="checkgraphicpassword.php?n=<?php echo $n ?>" method="post">			
				<input type="text" name="password" id="password" style="display: none;"> </input><br><br>
				<img src="./images/lockimage.jpg" width=" 20%" height="180px"></img>
				<input type="submit" value="Go to next S3PAS" class="updatebtn22">	</input>

			</div>

		</form>
	</section>



<script>

function takealpha(y)
{
	// console.log(x);
	var x = document.getElementById('password');
	x.value = x.value + y;
}
</script>
</body>
</html>