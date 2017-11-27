<?php
$xml=simplexml_load_file("sample.xml") or die("Error: Cannot create object");
$count = count($xml->Assignment);
for($i=0;$i<$count;$i++)
{
echo $Id = $xml->Assignment[$i]->Id;
echo "<br>";
echo $Status = $xml->Assignment[$i]->Status;
echo "<br>";
echo $Location = $xml->Assignment[$i]->Location;
echo "<br>";
echo $Fram = $xml->Assignment[$i]->Fram;
echo "<br>";
echo $Destination = $xml->Assignment[$i]->Destination;
echo "<br>";
echo $Assignment = $xml->Assignment[$i]->Assignment;
echo "<br>";
echo $Amount = $xml->Assignment[$i]->Amount;
echo "<br>";
echo $Units = $xml->Assignment[$i]->Units;
echo "<br>";
echo $Pay = $xml->Assignment[$i]->Pay;
echo "<br>";
echo $PilotFee = $xml->Assignment[$i]->PilotFee;
echo "<br>";
echo $Expires = $xml->Assignment[$i]->Expires;
echo "<br>";
echo $ExpireDateTime = $xml->Assignment[$i]->ExpireDateTime;
echo "<br>";
echo $Type = $xml->Assignment[$i]->Type;
echo "<br>";
echo $Express = $xml->Assignment[$i]->Express;
echo "<br>";
echo $Locked = $xml->Assignment[$i]->Locked;
echo "<br>";
}
?>