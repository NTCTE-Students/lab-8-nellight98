<?php

trait Cacheable {
    private $cache = [];

    public function getCache($key) {
        return $this->cache[$key] ?? null;
    }

    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }
}

class DataProvider {
    use Cacheable;

    public function getData($key) {
        if ($this->getCache($key) === null) {
            // Симуляция получения данных из источника
            $data = "Данные для ключа {$key}";
            $this->setCache($key, $data);
        }
        return $this->getCache($key);
    }
}

class ProductRepository {
    use Cacheable;

    public function getProduct($id) {
        if ($this->getCache($id) === null) {
            // Симуляция получения товара из базы данных
            $product = "Товар с ID {$id}";
            $this->setCache($id, $product);
        }
        return $this->getCache($id);
    }
}

// Тестирование
$dataProvider = new DataProvider();
echo $dataProvider->getData("key1") . "<br>";
echo $dataProvider->getData("key1") . "<br>";

$productRepository = new ProductRepository();
echo $productRepository->getProduct(1) . "<br>";
echo $productRepository->getProduct(1) . "<br>";