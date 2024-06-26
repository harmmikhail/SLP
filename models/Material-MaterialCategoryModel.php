<?php
require_once('Model.php');

class MaterialMaterialCategory extends Model{
    private $id;
    private $material_id;
    private $category_id;
    protected $table = "material_material_category";

    public function getFromDB($id) {
        $result = $this->getById($id)->fetch_assoc();
        $this->id = $result["id"];
        $this->material_id = $result["material_id"];
        $this->category_id = $result["category_id"];
    }

    public function insert(array $data, string $db = __DATABASE__) {
        return Model::insert($data, $db);
    }
    
    public function deleteByMaterialId(int $material_id, string $db = __DATABASE__) {
        if ($material_id <= 0) {
            throw new InvalidArgumentException("material_id must be greater than 0.\n");
        }

        $mysqli = new mysqli(__HOSTNAME__, __USERNAME__, __PASSWORD__, $db);

        if ($mysqli->connect_error) {
            return false;
        }

        $material_id = intval($material_id);

        // Combine into the full SQL statement
        $sql = "DELETE FROM $this->table WHERE material_id = ?";

        if (!($stmt = $mysqli->prepare($sql))) {
            $mysqli->close();
            return false;
        }

        // Bind the params
        $stmt->bind_param("i", $material_id);

        $result = $stmt->execute();
    
        $stmt->close();
        $mysqli->close();
        return $result;
    }

    public function deleteByCategoryId(int $category_id, string $db = __DATABASE__) {
        if ($category_id <= 0) {
            throw new InvalidArgumentException("category_id must be greater than 0.\n");
        }

        $mysqli = new mysqli(__HOSTNAME__, __USERNAME__, __PASSWORD__, $db);

        if ($mysqli->connect_error) {
            return false;
        }

        $category_id = intval($category_id);

        // Combine into the full SQL statement
        $sql = "DELETE FROM $this->table WHERE category_id = ?";

        if (!($stmt = $mysqli->prepare($sql))) {
            $mysqli->close();
            return false;
        }

        // Bind the params
        $stmt->bind_param("i", $category_id);

        $result = $stmt->execute();
    
        $stmt->close();
        $mysqli->close();
        return $result;
    }

    public function deleteById(int $id, string $db = __DATABASE__) {
        return Model::delete($id, $db);
    }

    /**
     * Updates information about material_id => category_id bindings. Upon the call deletes all old constraints, inserts new pairs.
     * 
     * @param int $material_id Id of the material to be bound with categories.
     * @param array $category_ids Array of ids of categories to be bound with the material.
     * @param string $db Database to be used. Defaults to config value.
     * @return int|bool Returns id of the last inserted material-category binding success, false on failure.
     */
    public function updateByMaterialId(int $material_id, array $category_ids = [], string $db = __DATABASE__) {
        if ($material_id <= 0) {
            throw new InvalidArgumentException("id must be greater than 0.\n");
        }
        $material_id = intval($material_id);
        $deleteResult = $this->deleteByMaterialId($material_id, $db);

        if (!$deleteResult) {
            return false;
        }
        if (empty($category_ids)) {
            return true;
        }

        /* Converting into an array of associative arrays.
            Example input of category_ids:
            array(2) {
                [0]=>
                string(1) "1"
                [1]=>
                string(1) "2"
            }

            Example result:
            array(2) {
                [0]=>
                array(2) {
                    ["material_id"]=>
                    int(23)
                    ["category_id"]=>
                    string(1) "1"
                }
                [1]=>
                array(2) {
                    ["material_id"]=>
                    int(23)
                    ["category_id"]=>
                    string(1) "2"
                }
                }
                array(2) {
                [0]=>
                array(2) {
                    ["material_id"]=>
                    int(23)
                    ["category_id"]=>
                    string(1) "1"
                }
                [1]=>
                array(2) {
                    ["material_id"]=>
                    int(23)
                    ["category_id"]=>
                    string(1) "2"
                }
            } 
        */
        $material_category = [];
        foreach($category_ids as $category_id) {
            array_push($material_category, array("material_id"=>$material_id, "category_id"=>$category_id));

        }
        return $this->insert($material_category, $db);
    }

    public function update(int $id, array $data, string $db = __DATABASE__) {
        return Model::update($id, $data, $db);
    }
}