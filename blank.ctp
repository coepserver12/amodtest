<?php
if( $registration_status === 0 ){ ?>

<h1>कृपया अगोदर आपल्या प्रोफाईल ची माहिती पूर्ण भरा.</h1>
<h3>Go to -> Setting -> प्रोफाइल पूर्ण भरा</h3>

<?php
}
elseif($registration_status === 2 )
{
if($role_id == 2 || $role_id == 3 || $role_id == 4 || $role_id == 5 || $role_id == 6)
{ ?>
<h1>तुमचे अकाउंट अजून ऍक्टिव्हेट करण्यात आलेले नाही.</h1>

<?php }
else{ ?>
<h1>आपल्या अकाउंटला ऍडमिनिस्ट्रेटर कडून परवानगी भेटलेली नाही.</h1>
<h3>Go to -> Setting -> प्रोफाइल पूर्ण भरा</h3>
<?php
}
}elseif($registration_status === -1)
{	?>
 <h1>तुमचे अकाउंट अजून ऍक्टिव्हेट करण्यात आलेले नाही.</h1>
<?php
}?>
