<?php
/*
 * Dynmic_menu.php
 */
class Dynamic_menu extends CI_Controller
{

    private $ci;            // para CodeIgniter Super Global Referencias o variables globales
    private $id_menu        = 'id="menu"';
    private $class_menu        = 'class="menu"';
    private $class_parent    = 'class="parent"';
    private $class_last        = 'class="last"';
    // --------------------------------------------------------------------
    /**
     * PHP5        Constructor
     *
     */
    function __construct()
    {
        $this->ci = &get_instance();    // get a reference to CodeIgniter.
    }
    // --------------------------------------------------------------------
    /**
     * build_menu($table, $type)
     *
     * Description:
     *
     * builds the Dynaminc dropdown menu
     * $table allows for passing in a MySQL table name for different menu tables.
     * $type is for the type of menu to display ie; topmenu, mainmenu, sidebar menu
     * or a footer menu.
     *
     * @param    string    the MySQL database table name.
     * @param    string    the type of menu to display.
     * @return    string    $html_out using CodeIgniter achor tags.
     */

    function build_menu($group_user, $parent, $active)
    {
        $menu = array();

        $query = $this->ci->db->query("
     select m_treeacc.CHILD,m_treeacc.PARENT,m_treeacc.DESCRIPTION,m_treeacc.ICON
      from m_treeacc
     where m_treeacc.group_user = '" . $group_user . "' 
     AND m_treeacc.parent = '" . $parent . "' 
     AND m_treeacc.FLAG_ACTIVE ='" . $active . "'
     ");

        // now we will build the dynamic menus.
        $html_out = '';
        foreach ($query->result() as $row) {
            $id = $row->CHILD;
            $title = $row->DESCRIPTION;
            $parent_id = $row->PARENT;
            $icon = $row->ICON;
            $jmlh_child = $this->count_child($group_user, $id, $active);
            //$show_menu = $row->show_menu;
            $html_out .= '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#' . $id . '" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="' . $icon . '"></i></div>
                ' . $title . '
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>';
            $html_out .= '<div class="collapse" id="' . $id . '" aria-labelledby="headingTree" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">';



            $html_out .= $this->get_childs($group_user, $id, $active);
            $html_out .= '</nav></div>';
        }

        return $html_out;
    }
    /**
     * get_childs($menu, $parent_id) - SEE Above Method.
     *
     * Description:
     *
     * Builds all child submenus using a recurse method call.
     *
     * @param    mixed    $id
     * @param    string    $id usuario
     * @return    mixed    $html_out if has subcats else FALSE
     */
    function get_childs($group_user, $id, $active)
    {
        //$has_subcats = FALSE;

        $html_out = ' '; //' <ul class="nav nav-treeview">';
        $query = $this->ci->db->query("
         select m_treeacc.CHILD,m_treeacc.PARENT,m_treeacc.DESCRIPTION,m_treeacc.ICON,m_treeacc.URL
         from m_treeacc
        where m_treeacc.group_user = '" . $group_user . "' 
        AND m_treeacc.parent = '" . $id . "' 
        AND m_treeacc.FLAG_ACTIVE ='" . $active . "'
        order by m_treeacc.CHILD asc
        ");
        foreach ($query->result() as $row) {
            $id = $row->CHILD;
            $title = $row->DESCRIPTION;
            $parent_id = $row->PARENT;
            $is_parent = $row->PARENT;
            $url = $row->URL;
            $icon = $row->ICON;
            //$show_menu = $row->show_menu;

            $has_subcats = TRUE;


            $html_out .= '<a class="nav-link" href="' . base_url() . $url . ' ">
            <div class="sb-nav-link-icon"><i class="' . $icon . '"></i></div>' . $title . '
        </a>';
        }
        //$html_out .= '</ul>';

        return $html_out;
    }

    function count_child($group_user, $id, $active)
    {
        //$has_subcats = FALSE;

        $this->ci->db->count_all_results('m_treeacc');
        $this->ci->db->from('m_treeacc');
        $this->ci->db->where('group_user', $group_user);
        $this->ci->db->where('parent', $id);
        $this->ci->db->where('FLAG_ACTIVE', $active);

        // $query = $this->ci->db->query("select count(0) from m_treeacc where group_user = '".$group_user."' and parent ='".$id."' AND FLAG_ACTIVE ='".$active."'");


        return $this->ci->db->count_all_results();
    }
}
 
// ------------------------------------------------------------------------
// End of Dynamic_menu Library Class.
// ------------------------------------------------------------------------
/* End of file Dynamic_menu.php */
/* Location: ../application/libraries/Dynamic_menu.php */