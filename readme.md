# Include Tax
## A simple modifier for Statamic & Bison

This modifier will add tax onto a price. It uses the `tax_rate` in `bison.yaml`.

To install, copy the `inc_tax` folder to your `_add-ons` directory.  
Then, use it in your templates like so:

    {{ price|inc_tax }}

Requires Statamic 1.7 and Bison 1.1