
@include('template.header')
<!-- Begin page -->
<div id="page-wrapper">
    @include('template.top_bar',['user' => $user])
    @include('template.left_side_bar')
    @include('template.right_content', ['user' => $user,'nombreUtilisateurs'=>$nombreUtilisateurs,'nombreCommande'=>$nombreCommande])
</div>
<!-- END wrapper -->
    @include('template.footer')

