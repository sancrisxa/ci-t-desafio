<?php
/**
 * Class Model
 * Responsible to save the data to the database.
 * DO NOT modify this class.
 */
class Model
{
  /**
   * @var array
   */
  private $database = [];
  
  /**
   * @var array
   */
  private $items = [];
  
  /**
   * Perform save to the database
   *
   * @return Model
   */
  public function save()
  {
    $this->database = $this->items;
    // To simulate delay to save to the database.
    sleep(2);
    
    return $this;
  }
  
  /**
   * Add new item to the interactive save list.
   *
   * @return Model
   */
  public function addItem(string $item)
  {
    $this->items[] = $item;
    
    return $this;
  }
  
  /**
   * Return list of saved SKUs
   *
   * @return array
   */
  public function getList()
  {
    return $this->database;
  }
}
$model = new Model;

/**
 * CHALLENGE:
 * We got a simple execution which will save a list of SKU to the database.
 * However, it's taking more time than the expected.
 * Fix the code below in order to improve its performance.
 */
$startTime = microtime(true);
$skus = ['sku1', 'sku2', 'sku3', 'sku4', 'sku5', 'sku6', 'sku7', 'sku8', 'sku9'];

// foreach ($skus as $sku) {
//   $model->addItem($sku)->save();
// }

foreach ($skus as $sku) {
  $model->addItem($sku);
}

$model->save();

// Fetching SKU list:
$skuList = $model->getList();
$endTime = microtime(true); 
  
// Result:
echo 'Execution time of script = ' . ($endTime - $startTime) . ' sec: ';
print_r($skuList);


<?php
/**
 * Class Model
 * Responsible to save the data to the database.
 * DO NOT modify this class.
 */
class Model
{
  /**
   * @var array
   */
  private $database = [];
  
  /**
   * @var array
   */
  private $items = [];
  
  /**
   * Perform save to the database
   *
   * @return Model
   */
  public function save()
  {
    $this->database = $this->items;
    // To simulate delay to save to the database.
    sleep(2);
    
    return $this;
  }
  
  /**
   * Add new item to the interactive save list.
   *
   * @return Model
   */
  public function addItem(string $item)
  {
    $this->items[] = $item;
    
    return $this;
  }
  
  /**
   * Return list of saved SKUs
   *
   * @return array
   */
  public function getList()
  {
    return $this->database;
  }
}
$model = new Model;

/**
 * CHALLENGE:
 * We got a simple execution which will save a list of SKU to the database.
 * However, it's taking more time than the expected.
 * Fix the code below in order to improve its performance.
 */
$startTime = microtime(true);
$skus = ['sku1', 'sku2', 'sku3', 'sku4', 'sku5', 'sku6', 'sku7', 'sku8', 'sku9'];

// foreach ($skus as $sku) {
//   $model->addItem($sku)->save();
// }

foreach ($skus as $sku) {
  $model->addItem($sku);
}

$model->save();

// Fetching SKU list:
$skuList = $model->getList();
$endTime = microtime(true); 
  
// Result:
echo 'Execution time of script = ' . ($endTime - $startTime) . ' sec: ';
print_r($skuList);





