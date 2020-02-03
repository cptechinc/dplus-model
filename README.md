# Welcome to Dplus Online

## Table of Contents

1. [Model Classes](#model-classes)
2. [Model Query Classes](#model-query-classes)


## Model Classes
The Model classes under _Model\_ are children of the same-named classes under _Model\Base_
however, the Model Classes have extra functionality in terms of the applications, but also
are able to make use of aliases for the column (property) names. For instance the Customer class has the property **arcucustid** which corresponds to the Customer ID, you can call for it via `$customer->id` or `$customer->custID`; The Model Classes themselves have a constant `COLUMN_ALIASES` which have an key (alias) and a value (actual property) 
```
const COLUMN_ALIASES = array(
    'id        => 'arcucustid',
    'custid  => 'arcucustid',
);
```

Each Model class is provided with the MagicMethodTraits so you can look up columns by the aliases defined for that Model, and extra functionality such as Get the actual column name, Does column / alias exist, Ability to get / set values using the aliases. 

## Model Query Classes
The Model classes under _Model\_ are children of the same-named classes under _Model\Base_
however, the Model Classes have extra functionality for the applications
The Query Model class may have the QueryTraits which provide functionality to be able to use the Propel Methods of `findByXXX()`, `findOneByXXX()`, `requireOneByXXX()`, `filterByXXX()`, `orderByXXX()`, and `groupByXXX()` methods but with the Alias as the XXX so we don't have to clutter up the Model Query class file with a method for each method for each aliase needed, instead we just Add the **QueryTraits** class which will handle grabbing the correct column to provide the functionality requested. 

**Unfortunately, the `findByXXX()`, `findOneByXXX()`, `requireOneByXXX()`, `filterByXXX()`, `orderByXXX()`, and `groupByXXX()` functions only work with single value arguments, currently arrays or objects are not supported **

The Model Query also lets you execute Custom SQL without hassle


