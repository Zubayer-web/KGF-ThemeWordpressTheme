<?php 
function new_cunstom_field(){
    $ourbox= new_cmb2_box(array(
        'title'             =>__('Extra custom field','kgftheme'),
        'id'                =>'Extra-field',
        'object_types'      =>array("page"),
    ));
    $ourbox->add_field(array(
        'name'      =>__('Sub Title','kgftheme'),
        'id'        =>'sub-title',
        'type'      =>'text',
        ));
    $ourbox->add_field(array(
        'name'       =>__('Contact form','kgftheme'),
        'id'         =>'contact-form',
        'type'         =>'text',
    ));

}
add_action('cmb2_admin_init','new_cunstom_field');




















?>