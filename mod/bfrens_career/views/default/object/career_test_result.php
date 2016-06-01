<?php
if (isset($vars['entity'])) {
	$answer = $vars['entity'];
	}



$pass ="?elimahan=$answer->elimahan";
$pass .="&prayogika=$answer->prayogika";
$pass .="&vidya=$answer->vidya";
$pass .="&nirmanathamaka=$answer->nirmanathamaka";
$pass .="&viyaparika=$answer->viyaparika";
$pass .="&karyaliya=$answer->karyaliya";
$pass .="&mahajana=$answer->mahajana";
$url= "http://yahalu.com/jpgraph/iframe/career_text.php" . $pass ;
?>
<p>
Your results! This profile shows a graph of your interest in seven work or career activities. Does one category stand out over the others? The long bars (high scores) show the type of activities you like best. More than one high score means a combination of interests.
</p>

<iframe src="<?php echo $url;?>" width="990 px" height="600 px" frameborder="0" owerflow="hidden" > </iframe>
<p>
About Interest Areas:<br>
OUTDOOR<br>
Outdoor interest means that you like to work and move about outside. It also involves caring for animals and growing things. Farmers, foresters, landscape gardeners, surveyors, and sportsmen/ sportswomen are among those high in outdoor interests.<br>
PRACTICAL<br>
Practical interest means that you like to work mainly with tools and equipment, making and fixing things as well as operating machines. Jobs in this area include pilots, factory workers, technicians, and engineers.<br>
SCIENTIFIC<br>
Scientific interest means that you like to discover ideas, observe, investigate and experiment. It includes medical and health occupations. Doctors, pharmacists, zoologists, dentists, chemists, physicists have high scientific interests.<br>
CREATIVE<br>
A creative interest means that you like to express yourself. It includes artistic, musical, and literary occupations. An artistic interest shows that you like to design and create objects, appreciate beautiful things practise design, or decorate things around you. Artists, photographers, signwriters, and designers all do 'artistic' work. Musical interest means you like composing, dancing, singing, or playing musical instruments. Dancers, musicians, and entertainers have musical interests. Literary interest means that you like books, writing, and dealing with ideas. Literary jobs include actors, writers, editors, reporters and advertising jobs.<br>
BUSINESS<br>
Business interest means that you like meeting people, talking, discussing, and leading others such as in law, politics, buying and selling. It also involves business relations with people, as with travel agents, shopkeepers, executives, and managers.<br>
OFFICE<br>
An interest in office work means you like working indoors, and clerical tasks which involve organising and being accurate. It can involve planning and controlling. Clerical jobs such as secretary, office worker, receptionist, bank clerk, or computer operator are in this category. An interest in office work also means you like to work with numbers and do calculations such as in finance or statistics. A high interest in this area means that you might like such office jobs as computer programmer, barrister, or economist.<br>
PEOPLE CONTACT<br>
An interest in people contact means that you like to work mainly with people or that you are concerned about their social welfare. The work of teachers, nurses, police officers, and welfare workers involves a great deal of personal contact. An interest in working with people can also include jobs such as sales, cashiers, waiters, and secretaries.<br></p>