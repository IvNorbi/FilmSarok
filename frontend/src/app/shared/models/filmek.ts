import { Tag } from "./Tag";

export class Film{
    id!:string;
    release_year!: number
    name!:string;
    tags?: string[];
    favorite!: boolean;
    stars!:number;
    ratings!: number;
    
    image!: File;

    imageUrl!: string;
    toplist!: number;
    origin!: string[];
    description!: string;
}