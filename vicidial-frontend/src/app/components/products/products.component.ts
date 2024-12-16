import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/services/api.service';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.css']
})
export class ProductsComponent implements OnInit {
  products: any[] = []; // Array para almacenar los productos

  constructor(private apiService: ApiService) {}

  ngOnInit(): void {
    this.apiService.getProducts().subscribe(
      (data) => {
        this.products = data; // Asigna los datos recibidos
        console.log(this.products); // Verifica los datos en la consola
      },
      (error) => {
        console.error('Error al obtener productos:', error);
      }
    );
  }
}
