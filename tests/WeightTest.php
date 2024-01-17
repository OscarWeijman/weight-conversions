<?php
it('can convert kilograms to pound', function () {
    $pounds = \OscarWeijman\Weight\Weight::kilograms(100)->toPound();
   return expect($pounds)->toEqual(220.46);
});

it('can convert kilograms to stones', function () {
    $pounds = \OscarWeijman\Weight\Weight::kilograms(100)->toStones();
    return expect($pounds)->toEqual(15.747);
});
