<?php
session_start();
if (!isset($username))
{
    url::redirect('user_manager/index');
}

?>
<h1>Hello <?php echo $username;?>, welcome to the members area</h1>
<p>Lorem ipsum dolor sit amet, quicquid eam ad quia quod una litus vita Apolloni sed. Centum eum istam provoces Athenagora secundum cordarum sonus est Apollonius non ait. Suam vidit pater unica suae forsitan dicens unam. Oculos ut diem fiant in rei civibus unde tu. Labore accusam amici suae adulescentis Stranguillio sit audivit, contremuit in deinde vero diam nostra praedicabilium subsannio. Convivium laetatus ait in fuerat est se ad suis est cum. Boreas ingreditur est amet Cur meae sit in modo. Jesus Circumdat flante vestibus mundo anima. Dabo es sed eu fugiens laudo misera haec, tollite fit manibus dimittit in. Innumera patris Tyrius sed quod ait mea, neptunalia festinare decenter ortam pectore audi civitatem in. Dabo potest ei primum intus huius domus filia navem in modo cavendum es audito claudi in modo. Tyrio alius certe dixitque est cum.</p>
<br /><br />
<h3><a href="logout.php">LOG OUT</a></h3>