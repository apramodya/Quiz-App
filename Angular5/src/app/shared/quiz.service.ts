import {Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';

@Injectable()
export class QuizService {
  // properties
  readonly rootUrl = 'http://127.0.0.1:8000/api/';

  // helper methods

  constructor(private http: HttpClient) {
  }

  // http methods
  insertParticipant(name: string, email: string) {
    const body = {
      name : name,
      email: email
    }

    return this.http.post(this.rootUrl + 'participant', body);
  }


}
