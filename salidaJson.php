<?php
class SalidaJson {
    public static function generarJson($animals) {
        $data = [];
        foreach ($animals as $animal => $patas) {
            $data[$animal] = $patas;
        }
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}
?>
