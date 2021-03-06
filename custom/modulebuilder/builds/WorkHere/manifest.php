<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'P',
  'author' => 'Phuong',
  'description' => 'Phuong works here',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'WorkHere',
  'published_date' => '2022-07-07 10:50:20',
  'type' => 'module',
  'version' => 1657191020,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'WorkHere',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'P_CustomInvoices',
      'class' => 'P_CustomInvoices',
      'path' => 'modules/P_CustomInvoices/P_CustomInvoices.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'P_CustomOrdDetail',
      'class' => 'P_CustomOrdDetail',
      'path' => 'modules/P_CustomOrdDetail/P_CustomOrdDetail.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'P_CustomOrders',
      'class' => 'P_CustomOrders',
      'path' => 'modules/P_CustomOrders/P_CustomOrders.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'P_CustomProducts',
      'class' => 'P_CustomProducts',
      'path' => 'modules/P_CustomProducts/P_CustomProducts.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'P_CustomSuppliers',
      'class' => 'P_CustomSuppliers',
      'path' => 'modules/P_CustomSuppliers/P_CustomSuppliers.php',
      'tab' => true,
    ),
    5 => 
    array (
      'module' => 'P_CustomVoucher',
      'class' => 'P_CustomVoucher',
      'path' => 'modules/P_CustomVoucher/P_CustomVoucher.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/P_CustomInvoices',
      'to' => 'modules/P_CustomInvoices',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/P_CustomOrdDetail',
      'to' => 'modules/P_CustomOrdDetail',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/P_CustomOrders',
      'to' => 'modules/P_CustomOrders',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/P_CustomProducts',
      'to' => 'modules/P_CustomProducts',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/P_CustomSuppliers',
      'to' => 'modules/P_CustomSuppliers',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/P_CustomVoucher',
      'to' => 'modules/P_CustomVoucher',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);