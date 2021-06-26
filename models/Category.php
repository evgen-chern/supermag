<?php
class Category
{
    /**
     * @return an array of Categories
     */

    public static function getCategoriesList()
    {
        //QUERY TO DB
        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT id,name
            FROM category
            ORDER BY sort_order ASC'
        );

        $i = 0;
        while($row = $result->fetch()) {
            $categoryList[$i] ['id'] = $row['id'];
            $categoryList[$i] ['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }
}