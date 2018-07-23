<?php
/**
 * Created by PhpStorm.
 * User: Lucas Brito
 * Date: 20/07/2018
 * Time: 14:05
 */

namespace Lbernardo\AdminLte;


class AdminLte
{

    public static function menu($menuConfig = [])
    {
        $str = null;
        // Nome da rota atual
        if (config("adminlte.menuRoute","url") == "url")
            $routeName = \Request::path();
        else
            $routeName = \Request::route()->getName();

        foreach ($menuConfig as $header => $listMenus) {
            $str .= '<li class="header">'.$header.'</li>'."\n";
            foreach ($listMenus as $config) {
                $href = "#";
                $active = null;
                $namesRoutes = [];
                $text = $config['text'];
                $icon = $config['icon'];
                $menus = isset($config['menus']) ? $config['menus'] : null;
                // Verifica se tem menu para gerar lista de rotas
                if ($menus) {
                    $namesRoutes = array_keys($menus);
                }

                // Verifica se existe rota para verificar
                if (isset($config['href'])) {
                    $href = self::getRoute($config['href']);
                }

                // Verifica se rota atual esta na lista de rotas de menus
                if (in_array($routeName, $namesRoutes)) {
                    $active = "menu-open active";
                }


                // Cria primeira link
                $str .= '<li class="treeview ' . $active . '">' . "\n";
                $str .= '<a href="' . $href . '">' . "\n";
                $str .= '<i class="' . $icon . '"></i> <span>' . __($text) . '</span>' . "\n";
                $str .= $menus ? '<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>' . "\n" : null;
                $str .= '</a>';

                // Verifica se existe menus
                if ($menus) {
                    $str .= '<ul class="treeview-menu">' . "\n";
                    // Lista de menus para gerar links
                    foreach ($menus as $route => $menu) {
                        $activeLink = $route == $routeName ? 'active' : null;
                        $hrefRoute = self::getRoute($route);
                        $str .= '<li class="' . $activeLink . '">' . "\n";
                        $str .= '<a href="' . $hrefRoute . '">' . "\n";
                        $str .= '<i class="' . $menu['icon'] . '"></i>' . "\n";
                        $str .= __($menu['text']) . "\n";
                        $str .= '</a>' . "\n";
                        $str .= '</li>' . "\n";
                    }
                    $str .= '</ul>' . "\n";
                }

                $str .= "</li>" . "\n";
            } // Fim do loop de menus
        }
        return $str;

    }

    /**
     * Get rota
     * @param $route
     * @return string
     */
    private static function getRoute($route) {
        if (config("adminlte.menuRoute","url") == "url")
            return url($route);
        else
            return route($route);
    }

}