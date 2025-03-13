import { User } from ".";
import {Cover} from "./Cover";

export interface Film {
    id: string,
    user_id: number,
    title: string,
    description: string,
    release_date: Date,
    is_activated: boolean,
    likes_count: number,
    cover: Cover,
    creator: User
}