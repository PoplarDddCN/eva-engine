<?php
namespace User\Form;

class RoleDeleteForm extends RoleForm
{
    protected $validationGroup = array('id');

    protected $baseFilters = array(
        'id' => array(
            'name' => 'id',
            'required' => true,
            'filters' => array(
               array('name' => 'Int'),
            ),
        ),
    );
}
